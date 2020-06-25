---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_cd4a874127cd23508641c63b640ee838 -->
## doc.json
> Example request:

```bash
curl -X GET \
    -G "http://localhost/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
"{\n    \"variables\": [],\n    \"info\": {\n        \"name\": \"Laravel API\",\n        \"_postman_id\": \"711a1436-fa50-48fe-b80a-23e8cb52dc46\",\n        \"description\": \"\",\n        \"schema\": \"https:\\\/\\\/schema.getpostman.com\\\/json\\\/collection\\\/v2.0.0\\\/collection.json\"\n    },\n    \"item\": [\n        {\n            \"name\": \"general\",\n            \"description\": \"\",\n            \"item\": [\n                {\n                    \"name\": \"doc.json\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"doc.json\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Register\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/register\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Login\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/login\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Social Login\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/socialLogin\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\",\\n    \\\"social_type\\\": \\\"1\\\",\\n    \\\"social_account_id\\\": \\\"social account id\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Get player detail\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getplayerdetail\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Edit Profile\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/editprofile\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Change password\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/changepassword\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"password\\\": \\\"test@123\\\",\\n    \\\"confirm_password\\\": \\\"test@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Golden Game\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getgoldengame\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Add new bet\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/addbet\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"bets\\\": \\\"[{\\\\\\\"player_id\\\\\\\": 1,\\\\\\\"match_id\\\\\\\" : 1,\\\\\\\"bets_for\\\\\\\": \\\\\\\"Home\\\\\\\",\\\\\\\"is_used_joker\\\\\\\": 0},{\\\\\\\"player_id\\\\\\\": 1,\\\\\\\"match_id\\\\\\\" : 1,\\\\\\\"bets_for\\\\\\\": \\\\\\\"Away\\\\\\\",\\\\\\\"is_used_joker\\\\\\\": 0}]\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Meet Celebrity\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/meetceleb\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"celebrity_id\\\": 1\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Get Celebrities\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getcelebs\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"My Games\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getmygames\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"Get all the games in which user participate.\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Get Leader Board\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getleaderboard\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                }\n            ]\n        }\n    ]\n}"
```

### HTTP Request
`GET doc.json`


<!-- END_cd4a874127cd23508641c63b640ee838 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register

> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","password":"ravi@123","birth_date":"1993-12-31"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of the player.
        `email` | string |  required  | Email of the player.
        `password` | string |  required  | Password of the player.
        `birth_date` | string |  required  | Birth date of the player.
    
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login

> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ravi.b.gaudani@gmail.com","password":"ravi@123"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | Email of the player.
        `password` | string |  required  | Password of the player.
    
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_a41cb9bc4797e68b34e505ea31e902c9 -->
## Social Login

> Example request:

```bash
curl -X POST \
    "http://localhost/api/socialLogin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","birth_date":"1993-12-31","social_type":"1","social_account_id":"social account id"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/socialLogin`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of the player.
        `email` | string |  required  | Email of the player.
        `birth_date` | string |  optional  | Birth date of the player.
        `social_type` | string |  required  | Type of social account 1 = FB, 2 = Insta.
        `social_account_id` | string |  required  | Id of the social account.
    
<!-- END_a41cb9bc4797e68b34e505ea31e902c9 -->

<!-- START_163c6c900890db8b348143aac37b9da8 -->
## Privacy Policy

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/privacypolicy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/privacypolicy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": {
        "policy": "<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc blandit lacinia odio, quis sodales felis bibendum quis. Integer condimentum, dolor sollicitudin congue rhoncus, ex ligula egestas est, vel commodo ante mi non dui. Aliquam elementum, tellus et commodo congue, est dolor facilisis ante, sit amet mattis nibh ex ac augue. Mauris fringilla ex dui, ac placerat dui tempus quis. Pellentesque vestibulum faucibus ligula, non consectetur augue faucibus eget. Proin sodales rhoncus pulvinar. In vel augue nec eros faucibus feugiat sit amet at nulla.<\/p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Morbi orci ipsum, sollicitudin vel mauris sit amet, ultricies ullamcorper dolor. Ut eu tortor et justo gravida facilisis at ac erat. Nulla vestibulum rutrum nulla nec consequat. Vivamus quis tortor vitae dui ultrices viverra non non nisl. Nam eu purus ultrices, ultricies ante a, vehicula nulla. Sed laoreet, massa in ultricies vulputate, ligula justo posuere augue, quis aliquam nisl tortor at odio. Etiam auctor orci id tellus tempus, sit amet dapibus tellus consequat. Aliquam maximus id nisi congue placerat. Fusce egestas mi eros, quis auctor magna sagittis ultricies. Sed auctor aliquam nibh et auctor. Suspendisse potenti. In ut justo et sapien gravida sollicitudin.<\/p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Vivamus ac sapien ut risus faucibus pharetra. Sed ultrices rhoncus tempor. Nullam et sem vitae ante venenatis dapibus ac sed lacus. Aenean commodo nulla sit amet nulla facilisis, at egestas lorem tristique. Aliquam efficitur lorem at laoreet fermentum. Phasellus felis erat, pulvinar et elit et, aliquet efficitur est. Suspendisse varius elit consectetur lacus malesuada venenatis. Quisque mattis leo erat, nec rhoncus justo gravida non. Nunc euismod nulla nec nisl venenatis, sed sodales ligula condimentum.<\/p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Suspendisse nec massa id diam vehicula condimentum. Nullam iaculis, urna malesuada venenatis sagittis, nunc arcu gravida ex, vel finibus ligula sem eget ex. Vivamus finibus felis et lectus volutpat, vel viverra risus laoreet. Nam nibh nisi, efficitur a varius eget, venenatis eu lacus. Integer sit amet varius elit, ac mattis lectus. Donec pellentesque tellus eget venenatis imperdiet. Etiam ac dui hendrerit, malesuada ex id, pharetra lacus. Fusce viverra at odio at placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur et mattis nibh. Mauris sit amet risus semper, porttitor ante eget, scelerisque massa. Vivamus in velit nunc. Mauris sed rhoncus tellus. Donec a risus velit. Ut malesuada elit eget ipsum tincidunt, sit amet posuere elit commodo.<\/p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Maecenas facilisis fringilla varius. Nam eget risus vulputate, dignissim neque nec, dapibus ante. Vestibulum iaculis ullamcorper velit. Nam ullamcorper mauris nec mi lobortis, vel luctus turpis mattis. Nam vel nisi non lectus fringilla suscipit. Sed sed tincidunt dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus.<\/p>"
    },
    "message": "Get privacy policy successfully."
}
```

### HTTP Request
`GET api/privacypolicy`


<!-- END_163c6c900890db8b348143aac37b9da8 -->

<!-- START_9d1fd4f26e3d5f3f49b6e1f2a9b6e6d4 -->
## Get player detail

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getplayerdetail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getplayerdetail`


<!-- END_9d1fd4f26e3d5f3f49b6e1f2a9b6e6d4 -->

<!-- START_88a4c713715d6c9929f02fb704ae1a05 -->
## Edit Profile

> Example request:

```bash
curl -X POST \
    "http://localhost/api/editprofile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","birth_date":"1993-12-31"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/editprofile`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of the player.
        `birth_date` | string |  required  | Birth date of the player.
    
<!-- END_88a4c713715d6c9929f02fb704ae1a05 -->

<!-- START_367358a4dd6a1024185fa1c77f6d482a -->
## Change password

> Example request:

```bash
curl -X POST \
    "http://localhost/api/changepassword" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"test@123","confirm_password":"test@123"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/changepassword`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `password` | string |  required  | New password.
        `confirm_password` | string |  required  | Confirm password.
    
<!-- END_367358a4dd6a1024185fa1c77f6d482a -->

<!-- START_7fc23074a9200b51a1e96679dd1bf1ba -->
## My Games

Get all the games in which user participate.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getmygames" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getmygames`


<!-- END_7fc23074a9200b51a1e96679dd1bf1ba -->

<!-- START_50795d5f39beda350f7ee81dd250c92c -->
## Player total points

Get total points of the player.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getplayerpoints" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getplayerpoints"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getplayerpoints`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the player.

<!-- END_50795d5f39beda350f7ee81dd250c92c -->

<!-- START_6122edc5b31919f48ff6fb66db7b0c7f -->
## Golden Game

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getgoldengame" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getgoldengame`


<!-- END_6122edc5b31919f48ff6fb66db7b0c7f -->

<!-- START_d2cce3acc002c7e125139362a23928d0 -->
## Add new bet

> Example request:

```bash
curl -X POST \
    "http://localhost/api/addbet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"bets":"[{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Home\",\"is_used_joker\": 0},{\"player_id\": 1,\"match_id\" : 1,\"bets_for\": \"Away\",\"is_used_joker\": 0}]"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/addbet`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `bets` | array |  required  | Match id to place bet for.
    
<!-- END_d2cce3acc002c7e125139362a23928d0 -->

<!-- START_0abd6124caae91b7e721e5290d505e14 -->
## Meet Celebrity

> Example request:

```bash
curl -X POST \
    "http://localhost/api/meetceleb" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"celebrity_id":1}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/meetceleb`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `celebrity_id` | integer |  required  | Id of the celebrity.
    
<!-- END_0abd6124caae91b7e721e5290d505e14 -->

<!-- START_7741626d3372065a77e4d034a04bdd36 -->
## Get Celebrities

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getcelebs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getcelebs`


<!-- END_7741626d3372065a77e4d034a04bdd36 -->

<!-- START_5566874511a1fdc1fe0a3216c9e377a0 -->
## Get Leader Board

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getleaderboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getleaderboard`


<!-- END_5566874511a1fdc1fe0a3216c9e377a0 -->

<!-- START_fc69925eeaf83e770a9474a7b1eabfc8 -->
## Faq

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/faq" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faq"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/faq`


<!-- END_fc69925eeaf83e770a9474a7b1eabfc8 -->


