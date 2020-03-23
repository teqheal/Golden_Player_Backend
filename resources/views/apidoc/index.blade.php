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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">"{\n    \"variables\": [],\n    \"info\": {\n        \"name\": \"Laravel API\",\n        \"_postman_id\": \"1703f8c8-bbcd-47af-abac-282a63e3228b\",\n        \"description\": \"\",\n        \"schema\": \"https:\\\/\\\/schema.getpostman.com\\\/json\\\/collection\\\/v2.0.0\\\/collection.json\"\n    },\n    \"item\": [\n        {\n            \"name\": \"general\",\n            \"description\": \"\",\n            \"item\": [\n                {\n                    \"name\": \"doc.json\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"doc.json\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Register api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/register\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Login api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/login\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Display a listing of the resource.\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/celebs\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                }\n            ]\n        }\n    ]\n}"</code></pre>
<h3>HTTP Request</h3>
<p><code>GET doc.json</code></p>
<!-- END_cd4a874127cd23508641c63b640ee838 -->
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
<h2>Register api</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","password":"ravi@123"}'
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
<td>Name of the user.</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>Email of the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>Password of the user.</td>
</tr>
</tbody>
</table>
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
<h2>Login api</h2>
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
<td>Email of the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>Password of the user.</td>
</tr>
</tbody>
</table>
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->
<!-- START_6780fd6422adcf987209482e463720ce -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/celebs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/celebs"
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
<p><code>GET api/celebs</code></p>
<!-- END_6780fd6422adcf987209482e463720ce -->
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