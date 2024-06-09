# Cantina da mãe do gstx

table: products

id: int
name: string
description: optional<string>
price: int

table: customers

id: uuid
name: string
phone_number: string

table: cart // FindOrCreate
id: int
user_id: int
paid: bool

table: cart_products
id: 
cart_id:
product_id
amount:

table: receipts
id: 
cart_id: 
value: int
receipt_url: string
