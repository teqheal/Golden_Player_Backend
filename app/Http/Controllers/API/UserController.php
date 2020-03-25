<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Resources\User as UserResource;

class UserController extends BaseController
{
    /**
     * Register api
     *
     * @bodyParam name string required Name of the user. Example: Ravi Gaudani
     * @bodyParam email string required Email of the user. Example: ravi.b.gaudani@gmail.com
     * @bodyParam password string required Password of the user. Example: ravi@123
     * @bodyParam birth_date string required Birth date of the user. Example: 1993-12-31
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'birth_date' => 'required|date',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Social Login api
     *
     * @bodyParam name string required Name of the user. Example: Ravi Gaudani
     * @bodyParam email string required Email of the user. Example: ravi.b.gaudani@gmail.com
     * @bodyParam birth_date string not required Birth date of the user. Example: 1993-12-31
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

        $findUser = User::where('facebook_id', $request->social_account_id)
            ->orWhere('instagram_id', $request->social_account_id)
            ->first();

        if (!empty($findUser)) {
            $success['token'] =  $findUser->createToken('MyApp')->accessToken;
            $success['name'] =  $findUser->name;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            $checkEmail = User::where('email', $request->email)->first();
            if (!empty($checkEmail)) {
                if ($request->social_type == 1) {
                    $checkEmail->facebook_id = $request->social_account_id;
                } else {
                    $checkEmail->instagram_id = $request->social_account_id;
                }
                $checkEmail->save();
                $success['token'] =  $checkEmail->createToken('MyApp')->accessToken;
                $success['name'] =  $checkEmail->name;
                return $this->sendResponse($success, 'User login successfully.');
            } else {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->birth_date = $request->birth_date;
                if ($request->social_type == 1) {
                    $user->facebook_id = $request->social_account_id;
                } else {
                    $user->instagram_id = $request->social_account_id;
                }
                $user->save();
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['name'] =  $user->name;
                return $this->sendResponse($success, 'User login successfully.');
            }
        }
    }

    /**
     * Login api
     *
     * @bodyParam email string required Email of the user. Example: ravi.b.gaudani@gmail.com
     * @bodyParam password string required Password of the user. Example: ravi@123
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    /**
     * Get user detail
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserDetail()
    {
        return $this->sendResponse(new UserResource(Auth::user()), 'User profile get successfully.');
    }

    /**
     * Edit Profile api
     *
     * @bodyParam name string required Name of the user. Example: Ravi Gaudani
     * @bodyParam birth_date string not required Birth date of the user. Example: 1993-12-31
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->birth_date = $request->birth_date;
        $user->save();

        return $this->sendResponse(new UserResource($user), 'User profile updated successfully.');
    }

    /**
     * Change password api
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

        $user = User::where('id', Auth::user()->id)->first();
        $user->password = bcrypt($request->password);
        $user->save();
        return $this->sendResponse([], 'Password changed successfully.');
    }
}
