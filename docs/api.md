# API Documentation

## GET /api/v1/items

Description: Menampilkan seluruh data items.

Example:

GET /api/v1/items

## GET /api/v1/items?category_id={id}

Description: Filter items by category. Parameter category_id bersifat optional.

Query Parameter:

| Parameter | Type | Required | Description |
|---|---|---|---|
| category_id | integer | No | ID kategori yang digunakan untuk memfilter item |

Example:

GET /api/v1/items?category_id=1

Success Response:

{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Laptop",
            "quantity": 10,
            "price": 5000000,
            "category_id": 1
        }
    ]
}

Empty Response:

{
    "success": true,
    "data": []
}