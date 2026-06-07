# Inventory API V1

Base URL:
http://127.0.0.1:8000/api/v1

## Auth

### Register
Method: POST
URL: /register

Body:
{
  "name": "Azis",
  "email": "azis@gmail.com",
  "password": "password",
  "password_confirmation": "password"
}

Response:
{
  "success": true,
  "data": {},
  "message": "Register berhasil"
}

### Login
Method: POST
URL: /login

Body:
{
  "email": "azis@gmail.com",
  "password": "password"
}

Response:
{
  "success": true,
  "data": {
    "token": "token"
  },
  "message": "Login berhasil"
}

## Items

GET /items  
POST /items  
GET /items/{id}  
PUT /items/{id}  
DELETE /items/{id}

## Categories

GET /categories  
POST /categories  
GET /categories/{id}  
PUT /categories/{id}  
DELETE /categories/{id}