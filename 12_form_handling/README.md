# 📘 PHP Learning – Day 12

## 📌 Topic: Form Handling in PHP

Today I learned how to handle HTML form data using PHP.

---

# 🔹 What is Form Handling

Form handling means collecting user input from HTML forms and processing it using PHP.

---

# 🔹 Validate Empty Fields

```php
if(empty($_POST["name"])) {
    echo "Name is required";
}
```