# 📝 Simple PHP Blog App (Admin Only)

This is a basic blog application built with PHP and MySQL. Only the admin can log in to create, edit, and delete blog posts. It features a clean UI and essential blog functionality.

---

## 🔐 Admin Access

> The login credentials are hardcoded for simplicity.  
> You can find and change them in the `login.php` file.

- **Username:** `Olakiitan`
- **Password:** `12345`

---

## 🛠 Features

- ✅ Admin login system
- 📝 Create, edit, and delete blog posts
- 📄 Display all posts on the blog homepage
- ✅ "Post Published Successfully" popup with auto-hide after 2 seconds
- 🔁 Redirect to "All Posts" page after publishing
- 🎨 Styled using custom CSS

---

## 📂 File Structure

📁 blog_app/
│
└── admin
└── all-posts.php # View all posts
└── dashboard.php # Admin dashboard with post controls
└── post-form.php # Admin publish post form
└── login.php # Admin login form
└── logout.php # Admin logout
├── assests
└── css/
│ └── style.css # Main styling
└── js/
└──script.js # Main functionality
├── includes/
└── db.php # Database connection
└── function.php # Helper function
├── index.php # Homepage for blogs
├── post.php # Single blog post page
├── README.md # Project documentation
