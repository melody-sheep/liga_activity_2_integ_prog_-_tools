
```markdown
# 🎓 Laravel API Projects - Activities 1, 2 & 3

---

## 📌 ACTIVITY 3: Laravel Sanctum Authentication API

A fully functional **Authentication API** built with Laravel Sanctum featuring token-based authentication with register, login, logout, and protected routes.

### ✨ Features
- ✅ User registration with name, email, password
- ✅ User login with token generation
- ✅ Protected routes using Bearer tokens
- ✅ Get authenticated user data
- ✅ Logout (token invalidation)
- ✅ SQLite database for data persistence

### 🔧 Technologies Used
| Technology | Purpose |
|------------|---------|
| 🧱 Laravel 12 | PHP Framework |
| 🔐 Laravel Sanctum | Authentication |
| 🗄️ SQLite | Database |
| ⚡ ThunderClient | API Testing |

---

### 📋 Authentication Endpoints

| Method | Endpoint | Description | Auth Required |
|--------|----------|-------------|---------------|
| POST | `/api/register` | Register new user | ❌ No |
| POST | `/api/login` | Login & get token | ❌ No |
| GET | `/api/user` | Get authenticated user | ✅ Yes |
| POST | `/api/logout` | Logout & delete token | ✅ Yes |
| GET | `/api/students` | Get all students (protected) | ✅ Yes |
| POST | `/api/students` | Create new student (protected) | ✅ Yes |
| GET | `/api/students/{id}` | Get single student (protected) | ✅ Yes |
| PUT | `/api/students/{id}` | Update student (protected) | ✅ Yes |
| DELETE | `/api/students/{id}` | Delete student (protected) | ✅ Yes |

---

### 🧪 ThunderClient Testing Screenshots

#### 1. 📝 Register Endpoint
**POST** `http://127.0.0.1:8000/api/register`
<p align="center">
  <img src="./asset/image/screenshot/thunderclient-register.png" alt="Register Endpoint" width="80%" />
</p>
<p align="center">
  <em>✅ User registration with name, email, and password</em>
</p>

---

#### 2. 🔑 Login Endpoint
**POST** `http://127.0.0.1:8000/api/login`
<p align="center">
  <img src="./asset/image/screenshot/thunderclient-login.png" alt="Login Endpoint" width="80%" />
</p>
<p align="center">
  <em>✅ Login returns user data and Bearer token</em>
</p>

---

#### 3. 👤 Get User Endpoint (Protected)
**GET** `http://127.0.0.1:8000/api/user`  
**Headers:** `Authorization: Bearer {token}`
<p align="center">
  <img src="./asset/image/screenshot/thunderclient-getuser.png" alt="Get User Endpoint" width="80%" />
</p>
<p align="center">
  <em>✅ Get authenticated user data using Bearer token</em>
</p>

---

#### 4. 🚪 Logout Endpoint
**POST** `http://127.0.0.1:8000/api/logout`  
**Headers:** `Authorization: Bearer {token}`
<p align="center">
  <img src="./asset/image/screenshot/thunderclient-logout.png" alt="Logout Endpoint" width="80%" />
</p>
<p align="center">
  <em>✅ Logout invalidates the token</em>
</p>

---

#### 5. 📚 Student CRUD (Protected)
**GET** `http://127.0.0.1:8000/api/students`  
**Headers:** `Authorization: Bearer {token}`
<p align="center">
  <img src="./asset/image/screenshot/thunderclient-students.png" alt="Student CRUD" width="80%" />
</p>
<p align="center">
  <em>✅ GET /api/students - Successfully retrieved all student records</em>
</p>

---

### 💾 Database Structure

```sql
-- Users Table
CREATE TABLE users (
    id INTEGER PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- Personal Access Tokens Table (Sanctum)
CREATE TABLE personal_access_tokens (
    id INTEGER PRIMARY KEY,
    tokenable_type VARCHAR(255),
    tokenable_id INTEGER,
    name VARCHAR(255),
    token VARCHAR(64) UNIQUE,
    abilities TEXT,
    last_used_at TIMESTAMP,
    expires_at TIMESTAMP,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- Students Table
CREATE TABLE students (
    id INTEGER PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    course VARCHAR(255),
    year INTEGER,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

---

### 🚀 How to Run Activity 3

```bash
# 1. Navigate to project
cd "D:\3rd yr bsit 2nd sem files\Integrative Prog. & Tech\Activities\activity_3\liga_activity_3_integ_prog_tools"

# 2. Install dependencies
composer install

# 3. Setup environment
copy .env.example .env
php artisan key:generate

# 4. Configure database in .env (SQLite)
DB_CONNECTION=sqlite
# Remove DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 5. Run migrations (includes Sanctum tables)
php artisan migrate

# 6. Start server
php artisan serve

# 7. Test with ThunderClient using endpoints above
```

---

### 📊 Sample Data in Database

After testing, your database contains:

**Users Table:**
```json
{
  "id": 1,
  "name": "Alther Liga",
  "email": "altherliga@gmail.com",
  "created_at": "2026-02-18 12:10:24"
}
```

**Active Token:**
```json
{
  "id": 5,
  "user_id": 1,
  "last_used_at": "2026-02-18 12:35:51"
}
```

---

## 📌 ACTIVITY 2: Student CRUD API (Legacy)

A fully functional **RESTful API** built with Laravel that performs CRUD operations on student records featuring biblical names.

### 📋 API Endpoints (Activity 2)

| Method | Endpoint | Description |
|--------|----------|-------------|
| ✅ GET | `/api/test` | Test API connection |
| ✅ POST | `/api/students` | Create new student |
| ✅ GET | `/api/students` | Get all students |
| ✅ GET | `/api/students/{id}` | Get single student |
| ✅ PUT | `/api/students/{id}` | Update student |
| ✅ DELETE | `/api/students/{id}` | Delete student |

### 🧪 Sample CRUD Operations

**CREATE Students:**
```json
POST /api/students
{
    "name": "David",
    "email": "david@bible.edu",
    "course": "Leadership"
}
```

**GET All Students:**
```json
GET /api/students
Response: [
    {"id": 1, "name": "David", "email": "david@bible.edu", "course": "Leadership"},
    {"id": 2, "name": "Moses", "email": "moses@bible.edu", "course": "Law"},
    {"id": 3, "name": "Ruth", "email": "ruth@bible.edu", "course": "Loyalty"},
    {"id": 4, "name": "Paul", "email": "paul@bible.edu", "course": "Theology"}
]
```

---

## 👨‍💻 Author

**Alther Liga**  
📧 Email: altherliga@gmail.com  
📁 Repository: [liga_activity_3_integ_prog_tools](https://github.com/yourusername/liga_activity_3_integ_prog_tools)

---

## 📅 Completion Date
**February 18, 2026**

---

## 📝 License
This project is licensed under the MIT License.
```

---

## 📸 **What You Need to Do:**

1. **Take screenshots in ThunderClient** for each endpoint:
   - `thunderclient-register.png` - POST /api/register with success response
   - `thunderclient-login.png` - POST /api/login showing token in response
   - `thunderclient-getuser.png` - GET /api/user with Bearer token in Headers tab visible
   - `thunderclient-logout.png` - POST /api/logout with success message
   - You already have `thunderclient-students.png`

2. **Save them in:** `asset/image/screenshot/`

3. **Replace the placeholder URLs** in the README if your GitHub username is different

---
