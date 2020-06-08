<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Player;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Resources\Player as PlayerResource;
use App\Http\Resources\Match as MatchResource;
use Illuminate\Support\Facades\Hash;

class PlayerController extends BaseController
{
    /**
     * Register
     *
     * @bodyParam name string required Name of the player. Example: Ravi Gaudani
     * @bodyParam email string required Email of the player. Example: ravi.b.gaudani@gmail.com
     * @bodyParam password string required Password of the player. Example: ravi@123
     * @bodyParam birth_date string required Birth date of the player. Example: 1993-12-31
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:players',
            'birth_date' => 'required|date',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $player = Player::create($input);
        $success['token'] =  $player->createToken('MyApp')->accessToken;
        $success['name'] =  $player->name;

        return $this->sendResponse($success, 'Player register successfully.');
    }

    /**
     * Social Login
     *
     * @bodyParam name string required Name of the player. Example: Ravi Gaudani
     * @bodyParam email string required Email of the player. Example: ravi.b.gaudani@gmail.com
     * @bodyParam birth_date string Birth date of the player. Example: 1993-12-31
     * @bodyParam social_type string required Type of social account 1 = FB, 2 = Insta. Example: 1
     * @bodyParam social_account_id string required Id of the social account. Example: social account id
     *
     * @return \Illuminate\Http\Response
     */
    public function socialLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'social_type' => 'required',
            'social_account_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $findPlayer = Player::where('facebook_id', $request->social_account_id)
            ->orWhere('instagram_id', $request->social_account_id)
            ->first();

        if (!empty($findPlayer)) {
            $success['token'] =  $findPlayer->createToken('MyApp')->accessToken;
            $success['name'] =  $findPlayer->name;
            return $this->sendResponse($success, 'Player login successfully.');
        } else {
            $checkEmail = Player::where('email', $request->email)->first();
            if (!empty($checkEmail)) {
                if ($request->social_type == 1) {
                    $checkEmail->facebook_id = $request->social_account_id;
                } else {
                    $checkEmail->instagram_id = $request->social_account_id;
                }
                $checkEmail->save();
                $success['token'] =  $checkEmail->createToken('MyApp')->accessToken;
                $success['name'] =  $checkEmail->name;
                return $this->sendResponse($success, 'Player login successfully.');
            } else {
                $player = new Player();
                $player->name = $request->name;
                $player->email = $request->email;
                $player->birth_date = $request->birth_date;
                if ($request->social_type == 1) {
                    $player->facebook_id = $request->social_account_id;
                } else {
                    $player->instagram_id = $request->social_account_id;
                }
                $player->save();
                $success['token'] =  $player->createToken('MyApp')->accessToken;
                $success['name'] =  $player->name;
                return $this->sendResponse($success, 'Player login successfully.');
            }
        }
    }

    /**
     * Login
     *
     * @bodyParam email string required Email of the player. Example: ravi.b.gaudani@gmail.com
     * @bodyParam password string required Password of the player. Example: ravi@123
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $player = Player::where('email', $request->email)->first();
        if(!empty($player) && Hash::check($request->password, $player->password)) {
            $success['token'] =  $player->createToken('MyApp')->accessToken;
            $success['name'] =  $player->name;
            return $this->sendResponse($success, 'Player login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    /**
     * Get player detail
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlayerDetail()
    {
        return $this->sendResponse(new PlayerResource(Auth::guard('player')->user()), 'Player profile get successfully.');
    }

    /**
     * Edit Profile
     *
     * @bodyParam name string required Name of the player. Example: Ravi Gaudani
     * @bodyParam birth_date string required Birth date of the player. Example: 1993-12-31
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'birth_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $player = Player::where('id', Auth::guard('player')->user()->id)->first();
        $player->name = $request->name;
        $player->birth_date = $request->birth_date;
        $player->save();

        return $this->sendResponse(new PlayerResource($player), 'Player profile updated successfully.');
    }

    /**
     * Change password
     *
     * @bodyParam password string required New password. Example: test@123
     * @bodyParam confirm_password string required Confirm password. Example: test@123
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $player = Player::where('id', Auth::guard('player')->user()->id)->first();
        $player->password = bcrypt($request->password);
        $player->save();
        return $this->sendResponse([], 'Password changed successfully.');
    }

    /**
     * My Games
     *
     * Get all the games in which user participate.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMyGames()
    {
        $player = Player::where('id', Auth::guard('player')->user()->id)->first();
        return $this->sendResponse(MatchResource::collection($player->matches()->paginate(10)), 'Get games successfully.');
    }
}
