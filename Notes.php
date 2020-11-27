first download vendor folder by composer
composer require google/apiclient:"^2.0"

Google_login.php is controller
Google_login_model.php is a model
google_login.php is view

Database:-
bd-name :codeigniter_chat
table name- chat_user
column :- (8)
user_id int(11) auto_incement
login_oauth_uid	varchar(250)
first_name	varchar(250)
last_name	varchar(250)
email_address	varchar(250)
profile_picture	varchar(250)
created_at	datetime
updated_at	datetime
