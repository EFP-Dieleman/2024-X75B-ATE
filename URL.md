
## PAGES

- GET /index.php?page=home
- GET /index.php?page=contact
- GET /index.php?page=catalog

## AUTH

- GET|POST /index.php?page=register
- GET /index.php?action=verifyEmail
- GET /index.php?page=login
- POST /index.php?action=identify
- GET /index.php?page=logout

## USER

- GET|POST /index.php?page=profile
- GET /index.php?page=wishlist
- GET /index.php?page=review

## ITEM

- GET /index.php?page=produit&id=2
- POST /index.php?produit=2&custom=wishlist&action=add
- POST /index.php?produit=2&custom=wishlist&action=del
- POST /index.php?produit=2&custom=review&action=add
- POST /index.php?produit=2&custom=review&action=del

## CATALOG

- GET /index.php?page=catalog&category=45&theme=78&tag_ids=1,5,12,4,9
- GET /index.php?page=catalog&category=&theme=&tag_ids=1,5,12,4,9
- GET /index.php?page=catalog&category=33&theme=&tag_ids=
