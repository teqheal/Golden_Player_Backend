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


> Example response (500):

```json
{
    "message": "Server Error"
}
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


