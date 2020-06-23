<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc", ["format" => ".json"]) }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>general</h1>
<!-- START_cd4a874127cd23508641c63b640ee838 -->
<h2>doc.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET doc.json</code></p>
<!-- END_cd4a874127cd23508641c63b640ee838 -->
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
<h2>Register</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","password":"ravi@123","birth_date":"1993-12-31"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Ravi Gaudani",
    "email": "ravi.b.gaudani@gmail.com",
    "password": "ravi@123",
    "birth_date": "1993-12-31"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the player.</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>Email of the player.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>Password of the player.</td>
</tr>
<tr>
<td><code>birth_date</code></td>
<td>string</td>
<td>required</td>
<td>Birth date of the player.</td>
</tr>
</tbody>
</table>
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
<h2>Login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ravi.b.gaudani@gmail.com","password":"ravi@123"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ravi.b.gaudani@gmail.com",
    "password": "ravi@123"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/login</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>Email of the player.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>Password of the player.</td>
</tr>
</tbody>
</table>
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->
<!-- START_a41cb9bc4797e68b34e505ea31e902c9 -->
<h2>Social Login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/socialLogin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","birth_date":"1993-12-31","social_type":"1","social_account_id":"social account id"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/socialLogin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Ravi Gaudani",
    "email": "ravi.b.gaudani@gmail.com",
    "birth_date": "1993-12-31",
    "social_type": "1",
    "social_account_id": "social account id"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/socialLogin</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the player.</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>Email of the player.</td>
</tr>
<tr>
<td><code>birth_date</code></td>
<td>string</td>
<td>optional</td>
<td>Birth date of the player.</td>
</tr>
<tr>
<td><code>social_type</code></td>
<td>string</td>
<td>required</td>
<td>Type of social account 1 = FB, 2 = Insta.</td>
</tr>
<tr>
<td><code>social_account_id</code></td>
<td>string</td>
<td>required</td>
<td>Id of the social account.</td>
</tr>
</tbody>
</table>
<!-- END_a41cb9bc4797e68b34e505ea31e902c9 -->
<!-- START_9d1fd4f26e3d5f3f49b6e1f2a9b6e6d4 -->
<h2>Get player detail</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/getplayerdetail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getplayerdetail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getplayerdetail</code></p>
<!-- END_9d1fd4f26e3d5f3f49b6e1f2a9b6e6d4 -->
<!-- START_88a4c713715d6c9929f02fb704ae1a05 -->
<h2>Edit Profile</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/editprofile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","birth_date":"1993-12-31"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/editprofile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Ravi Gaudani",
    "birth_date": "1993-12-31"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/editprofile</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the player.</td>
</tr>
<tr>
<td><code>birth_date</code></td>
<td>string</td>
<td>required</td>
<td>Birth date of the player.</td>
</tr>
</tbody>
</table>
<!-- END_88a4c713715d6c9929f02fb704ae1a05 -->
<!-- START_367358a4dd6a1024185fa1c77f6d482a -->
<h2>Change password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/changepassword" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"test@123","confirm_password":"test@123"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/changepassword"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "test@123",
    "confirm_password": "test@123"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/changepassword</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>New password.</td>
</tr>
<tr>
<td><code>confirm_password</code></td>
<td>string</td>
<td>required</td>
<td>Confirm password.</td>
</tr>
</tbody>
</table>
<!-- END_367358a4dd6a1024185fa1c77f6d482a -->
<!-- START_6122edc5b31919f48ff6fb66db7b0c7f -->
<h2>Golden Game</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/getgoldengame" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getgoldengame"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getgoldengame</code></p>
<!-- END_6122edc5b31919f48ff6fb66db7b0c7f -->
<!-- START_d2cce3acc002c7e125139362a23928d0 -->
<h2>Add new bet</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/addbet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"bets":"[{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Home\",\"is_used_joker\": 0},{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Away\",\"is_used_joker\": 0}]"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/addbet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "bets": "[{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Home\",\"is_used_joker\": 0},{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Away\",\"is_used_joker\": 0}]"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/addbet</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>bets</code></td>
<td>array</td>
<td>required</td>
<td>Match id to place bet for.</td>
</tr>
</tbody>
</table>
<!-- END_d2cce3acc002c7e125139362a23928d0 -->
<!-- START_0abd6124caae91b7e721e5290d505e14 -->
<h2>Meet Celebrity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/meetceleb" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"celebrity_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/meetceleb"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "celebrity_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/meetceleb</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>celebrity_id</code></td>
<td>integer</td>
<td>required</td>
<td>Id of the celebrity.</td>
</tr>
</tbody>
</table>
<!-- END_0abd6124caae91b7e721e5290d505e14 -->
<!-- START_7741626d3372065a77e4d034a04bdd36 -->
<h2>Get Celebrities</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/getcelebs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getcelebs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getcelebs</code></p>
<!-- END_7741626d3372065a77e4d034a04bdd36 -->
<!-- START_7fc23074a9200b51a1e96679dd1bf1ba -->
<h2>My Games</h2>
<p>Get all the games in which user participate.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/getmygames" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getmygames"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getmygames</code></p>
<!-- END_7fc23074a9200b51a1e96679dd1bf1ba -->
<!-- START_5566874511a1fdc1fe0a3216c9e377a0 -->
<h2>Get Leader Board</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/getleaderboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getleaderboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getleaderboard</code></p>
<!-- END_5566874511a1fdc1fe0a3216c9e377a0 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>