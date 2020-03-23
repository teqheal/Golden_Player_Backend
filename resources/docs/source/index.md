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
"{\n    \"variables\": [],\n    \"info\": {\n        \"name\": \"Laravel API\",\n        \"_postman_id\": \"9abad33b-a02d-40dd-acfd-eeee4feb8988\",\n        \"description\": \"\",\n        \"schema\": \"https:\\\/\\\/schema.getpostman.com\\\/json\\\/collection\\\/v2.0.0\\\/collection.json\"\n    },\n    \"item\": [\n        {\n            \"name\": \"general\",\n            \"description\": \"\",\n            \"item\": [\n                {\n                    \"name\": \"doc.json\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"doc.json\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Register api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/register\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"name\\\": \\\"Ravi Gaudani\\\",\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Login api\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/login\",\n                            \"query\": []\n                        },\n                        \"method\": \"POST\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"{\\n    \\\"email\\\": \\\"ravi.b.gaudani@gmail.com\\\",\\n    \\\"password\\\": \\\"ravi@123\\\"\\n}\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                },\n                {\n                    \"name\": \"Display a listing of the resource.\",\n                    \"request\": {\n                        \"url\": {\n                            \"protocol\": \"http\",\n                            \"host\": \"localhost\",\n                            \"path\": \"api\\\/celebs\",\n                            \"query\": []\n                        },\n                        \"method\": \"GET\",\n                        \"header\": [\n                            {\n                                \"key\": \"Content-Type\",\n                                \"value\": \"application\\\/json\"\n                            },\n                            {\n                                \"key\": \"Accept\",\n                                \"value\": \"application\\\/json\"\n                            }\n                        ],\n                        \"body\": {\n                            \"mode\": \"raw\",\n                            \"raw\": \"[]\"\n                        },\n                        \"description\": \"\",\n                        \"response\": []\n                    }\n                }\n            ]\n        }\n    ]\n}"
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
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","password":"ravi@123"}'

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
`POST api/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of the user.
        `email` | string |  required  | Email of the user.
        `password` | string |  required  | Password of the user.
    
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
    `email` | string |  required  | Email of the user.
        `password` | string |  required  | Password of the user.
    
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_a41cb9bc4797e68b34e505ea31e902c9 -->
## Social Login api

> Example request:

```bash
curl -X POST \
    "http://localhost/api/socialLogin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Ravi Gaudani","email":"ravi.b.gaudani@gmail.com","social_type":"1","social_account_id":"social account id"}'

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
    `name` | string |  required  | Name of the user.
        `email` | string |  required  | Email of the user.
        `social_type` | string |  required  | Type of social account 1 = FB, 2 = Insta.
        `social_account_id` | string |  required  | Id of the social account.
    
<!-- END_a41cb9bc4797e68b34e505ea31e902c9 -->

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


