# Discuss — PHP Q&A board

Small PHP/MySQL question-and-answer site. Visitors sign up, log in, ask a question, browse by category or user, search, and read the latest threads. It is a first complete PHP project, not a framework app.

## Features

- Sign up and log in
- Ask a question
- Question list and question detail
- Filter by category (`c-id`), user (`u-id`), latest
- Search

`index.php` is the front controller. It routes `signup`, `login`, `ask`, `q-id`, `c-id`, `u-id`, `latest`, and `search`. Client markup lives in `clint/` (the folder name is spelled that way on disk). POST handling is in `server/requests.php`.

## Stack

- PHP with MySQLi
- HTML/CSS in `public/` and `clint/`
- Database name in code: **`discuss`**
- Default connection in `common/db.php`: host `127.0.0.1`, port **3307**, user `root`, empty password

If your MySQL listens on 3306, change the port. The older README that said `qa_platform` was wrong — the PHP file uses `discuss`.

## Setup

1. Install XAMPP, WAMP, or any PHP + MySQL stack.
2. Create an empty database named `discuss`.
3. Import whatever `.sql` file shipped with the project (or create tables to match the queries in `server/` and `common/`).
4. Edit `common/db.php` so host, port, user, and password match your machine.
5. Put the repo under the web root and open:

```text
http://localhost/php-first-project-discuss-complete/index.php
```

Adjust the path if your folder name differs. There is no `.env` file.

Do not deploy this with `root` / empty password. Move credentials out of `common/db.php` before the site is public.

## Layout

```text
index.php          Front controller
clint/             Page templates (signup, login, ask, lists)
common/db.php      MySQLi connection
server/requests.php
public/            Static assets
```

## License

See the repository.
