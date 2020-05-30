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
"{\n    \"variables\": [],\n    \"info\": {\n        \"name\": \"Laravel API\",\n        \"_postman_id\": \"8060833d-5bd9-4894-bb00-bc6f08acb43e\",\n        \"description\": \"\",\n        \"schema\": \"https:\\\/\\\/schema.getpostman.com\\\/json\\\/collection\\\/v2.0.0\\\/collection.json\"\n    },\n    \"item\": [\n        {\n            \"name\": \"general\",\n            \"description\": \"\",\n            \"item\": [\n                {\n                    \"name\": \"doc.json\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"doc.json\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Register api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/register\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Login api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/login\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Social Login api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/socialLogin\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\",\\n    \\\"social_type\\\": \\\"1\\\",\\n    \\\"social_account_id\\\": \\\"social account id\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Get player detail\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/getplayerdetail\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Edit Profile api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/editprofile\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"birth_date\\\": \\\"1993-12-31\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Change password api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/changepassword\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"password\\\": \\\"test@123\\\",\\n    \\\"confirm_password\\\": \\\"test@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Get All Games\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/games\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Display a listing of the resource.\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/celebs\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                }\n            ]\n        }\n    ]\n}"
```

### HTTP Request
`GET doc.json`


<!-- END_cd4a874127cd23508641c63b640ee838 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

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
## Login api

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
## Social Login api

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
## Edit Profile api

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
## Change password api

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

<!-- START_a213ebd3dc2db295be3e4893926eb6d9 -->
## Get All Games

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/games" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/games"
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
`GET api/games`


<!-- END_a213ebd3dc2db295be3e4893926eb6d9 -->

<!-- START_d2cce3acc002c7e125139362a23928d0 -->
## Add new bet

> Example request:

```bash
curl -X POST \
    "http://localhost/api/addbet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"match_id":1,"bets_for":"1","is_used_joker":1}'

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
    "match_id": 1,
    "bets_for": "1",
    "is_used_joker": 1
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
    `match_id` | integer |  required  | Match id to place bet for.
        `bets_for` | string |  required  | selected option (home team id OR away team id OR DRAW).
        `is_used_joker` | integer |  required  | Is used joker or not 1 = used, 0 = not used.
    
<!-- END_d2cce3acc002c7e125139362a23928d0 -->

<!-- START_6780fd6422adcf987209482e463720ce -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/celebs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/celebs`


<!-- END_6780fd6422adcf987209482e463720ce -->


