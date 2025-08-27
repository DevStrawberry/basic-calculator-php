# 🧮 Basic Calculator with PHP

A simple, web-based calculator built using **PHP**, **HTML**, and **CSS**. It handles basic arithmetic operations with form input validation and is designed to run on an **Apache server** (tested with **XAMPP**).

---

## 📋 Features

- **Addition** ➕
- **Subtraction** ➖
- **Multiplication** ✖️
- **Division** ➗ (includes a division-by-zero check)

---

## 💻 How It Works

1.  The user enters two numbers into the form.
2.  The user selects the desired operation by clicking one of the buttons.
3.  The result of the calculation is then displayed on the page.
4.  The application includes error handling for missing inputs and division by zero.

---

## 🧠 Technologies Used

-   **PHP**: Handles the backend logic for the calculations.
-   **HTML**: Provides the form and page structure.
-   **CSS**: Used for basic styling and layout.

---

## 🚀 Getting Started

### Prerequisites

-   **XAMPP**: Must be installed on your system.
-   **PHP**: Included with XAMPP. You can verify the installation by running `php -v` in your terminal.

### Running the Project with XAMPP

1.  Clone the repository:
    ```bash
    git clone [https://github.com/DevStrawberry/basic-calculator-php.git](https://github.com/DevStrawberry/basic-calculator-php.git)
    ```
2.  Copy the project folder to your XAMPP's `htdocs` directory. For example, on Windows, it would be:
    `C:\xampp\htdocs\basic-calculator-php`
3.  Start the **Apache** service using the XAMPP Control Panel.
4.  Open your web browser and navigate to:
    `http://localhost/basic-calculator-php/Calculator/main.php`

---

### 📦 Project Structure
```text
basic-calculator-php/
├── Calculator/
│   ├── main.php      # Core PHP calculator logic
│   ├── style.css     # Styling for the form
├── README.md
```
---

## 📄 License
This project is open-source and available under the MIT [LICENSE](LICENSE.md).

Feel free to fork this repository or suggest improvements!
