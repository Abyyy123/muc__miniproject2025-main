# MUC Mini Project 2025  
Aplikasi Manajemen *Service Used* dan *Timesheet*  
Dibangun menggunakan **Laravel**, **Nwidart Modules**, dan **MySQL**.

---

## 📦 Teknologi yang Digunakan
- PHP 8+
- Laravel 8/9
- Nwidart/laravel-modules v8.0
- MySQL 8
- Bootstrap 5 (Admin Template)
- XAMPP

---

## 📁 Struktur Module
Project ini menggunakan arsitektur modular dari **nwidart/laravel-modules**:
Modules/
├── Employees
├── Proposal
├── Serviceused
└── Timesheet


---

## 🚀 Fitur Aplikasi
### **1. Module Employees**
- Menampilkan daftar karyawan
- Edit status employee *(active / inactive)*

### **2. Module Proposal**
- Menambahkan proposal baru
- Menampilkan daftar proposal

### **3. Module Serviceused**
- Menampilkan daftar service used
- Badge status (pending, ongoing, done)
- Perhitungan otomatis `timespent` berdasarkan timesheet
- Create serviceused  
- (Opsional) Edit & Delete serviceused

### **4. Module Timesheet**
- Menampilkan daftar timesheet
- Relasi ke proposal, employee, dan serviceused
- Perhitungan total durasi (HH:MM)

---

## ⚙️ Instalasi Project

### **1. Clone Repo**
```bash
git clone https://github.com/yourusername/muc__miniproject2025.git
cd muc__miniproject2025

