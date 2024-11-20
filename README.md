# PHP-Arrays-and-Foreach-Beginner-to-Advanced-Guide-with-Practical-Examples
This project is a hands-on guide to mastering PHP arrays and the powerful foreach loop. Whether you're a beginner learning PHP or an experienced developer refreshing your skills, this code showcases how to create, access, and iterate through arrays effectively.
# PHP Arrays and Foreach: Beginner to Advanced Guide

This repository showcases how to use PHP arrays effectively and iterate through them using the `foreach` loop. With practical examples and neat explanations, it is designed for beginners and those looking to refresh their PHP skills.

---

## **About the Code**

This project demonstrates:
1. **Indexed Arrays**  
   Arrays with numeric keys and how to access elements using their indexes.
2. **Associative Arrays**  
   Arrays with custom keys to store key-value pairs.
3. **Iterating Through Arrays**  
   Using the `foreach` loop to traverse both indexed and associative arrays.

---

## **Code Highlights**

### **1. Indexed Array Example**
```php
$foodss = array("biryani", "halwa", "milksweet");

foreach ($foodss as $dish) {
    echo "$dish <br>";
}
