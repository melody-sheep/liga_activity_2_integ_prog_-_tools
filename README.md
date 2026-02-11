
```markdown
# 🎓 Student CRUD API - Laravel 

<p align="center">
  <img src="https://github.com/melody-sheep/liga_activity_2_integ_prog_-_tools/blob/main/asset/image/screenshot/thunderclient-students.png?raw=true" 
       alt="Student CRUD ThunderClient Test" 
       width="100%" />
</p>
<p align="center">
  <em>✅ GET /api/students - Successfully retrieved all student records (David, Moses, Ruth, Paul)</em>
</p>

---

A fully functional **RESTful API** built with Laravel that performs CRUD operations on student records featuring basic information. This project demonstrates API development, database migrations, Eloquent ORM, and ThunderClient testing.

---

## 📋 API Endpoints Summary

| Method | Endpoint | Description |
|--------|----------|-------------|
| ✅ GET | `/api/test` | Test API connection |
| ✅ POST | `/api/students` | Create new student |
| ✅ GET | `/api/students` | Get all students |
| ✅ GET | `/api/students/{id}` | Get single student |
| ✅ PUT | `/api/students/{id}` | Update student |
| ✅ DELETE | `/api/students/{id}` | Delete student |

---

## 🧪 Complete CRUD Verification

### 1. 🔌 Test API Connection
```http
GET http://127.0.0.1:8000/api/test
```
**Response:**
```json
{
  "success": true,
  "message": "API is working!",
  "timestamp": "2026-02-11 15:35:01"
}
```

---

### 2. 👤 CREATE - Add Students (Bible Names)

**📌 Create David**
```http
POST http://127.0.0.1:8000/api/students
Content-Type: application/json

{
    "name": "David",
    "email": "david@bible.edu",
    "course": "Leadership"
}
```

**📌 Create Moses**
```http
POST http://127.0.0.1:8000/api/students
Content-Type: application/json

{
    "name": "Moses",
    "email": "moses@bible.edu",
    "course": "Law"
}
```

**📌 Create Ruth**
```http
POST http://127.0.0.1:8000/api/students
Content-Type: application/json

{
    "name": "Ruth",
    "email": "ruth@bible.edu",
    "course": "Loyalty"
}
```

**📌 Create Paul**
```http
POST http://127.0.0.1:8000/api/students
Content-Type: application/json

{
    "name": "Paul",
    "email": "paul@bible.edu",
    "course": "Theology"
}
```

---

### 3. 📖 READ - Retrieve Students

**📋 Get All Students**
```http
GET http://127.0.0.1:8000/api/students
```

**🔍 Get Single Student (ID: 1 - David)**
```http
GET http://127.0.0.1:8000/api/students/1
```

---

### 4. ✏️ UPDATE - Modify Student Data

**🔄 Update David's Course from "Leadership" to "Kingship"**
```http
PUT http://127.0.0.1:8000/api/students/1
Content-Type: application/json

{
    "course": "Kingship"
}
```

---

### 5. 🗑️ DELETE - Remove Student

**❌ Delete Paul (ID: 4)**
```http
DELETE http://127.0.0.1:8000/api/students/4
```

---

### 6. ✅ VERIFY - Confirm Deletion

**⚠️ Verify Paul is Deleted (Should return 404)**
```http
GET http://127.0.0.1:8000/api/students/4
```
**Expected Response:**
```json
{
  "success": false,
  "message": "Student not found"
}
```

---

## 🛠️ Technologies Used

| Technology | Purpose |
|------------|---------|
| 🧱 Laravel 12 | PHP Framework |
| 🗄️ MySQL | Database |
| ⚡ ThunderClient | API Testing |
| 🐘 PHP 8.2 | Programming Language |
| 🎨 Git/GitHub | Version Control |

---

## 🚀 How to Run

```bash
# 1. Clone repository
git clone https://github.com/melody-sheep/liga_activity_2_integ_prog_-_tools.git

# 2. Install dependencies
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Configure database in .env file
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=

# 5. Run migrations
php artisan migrate

# 6. Start server
php artisan serve

# 7. Test with ThunderClient
# Use the endpoints above
```

---

## 👨‍💻 Author

**Melody Sheep**  
📧 GitHub: [@melody-sheep](https://github.com/melody-sheep)  
📁 Repository: [liga_activity_2_integ_prog_-_tools](https://github.com/melody-sheep/liga_activity_2_integ_prog_-_tools)

---Liga Alther
