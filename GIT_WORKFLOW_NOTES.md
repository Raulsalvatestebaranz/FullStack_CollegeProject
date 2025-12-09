
# 📘 **GIT_WORKFLOW_NOTES.md**

### *FullStack_CollegeProject — Git & GitHub Workflow Guide*

This document explains exactly how this project was connected to GitHub and how the full branching workflow (main, develop, feature branches, PRs) was created.
Use this guide anytime you need to remember how to set up and work with Git professionally.

---

# 🟦 **1. Create GitHub Repository**

1. Go to your GitHub account
2. Create a new repo named **FullStack_CollegeProject**
3. Visibility: **Public** (to share with teacher)
4. **Do NOT** add:

   * README
   * .gitignore
   * License
5. Click **Create repository**

> Result: An empty GitHub repo waiting to receive code.

---

# 🟦 **2. Initialize Git in Local Project Folder**

Open VS Code terminal and navigate to the project:

```
cd C:\xampp\htdocs\codespace\FullStack_CollegeProject
```

Initialize Git:

```
git init
```

Add all files:

```
git add .
```

Commit them:

```
git commit -m "Initial commit - FullStack College Project"
```

---

# 🟦 **3. Connect Local Project to GitHub**

Run the GitHub remote add command:

```
git remote add origin https://github.com/Raulsalvatestebaranz/FullStack_CollegeProject.git
```

Rename default branch to `main`:

```
git branch -M main
```

Push the project to GitHub:

```
git push -u origin main
```

> Result: Your entire project is now on GitHub.

---

# 🟦 **4. Create the `develop` Branch**

This branch is used for integration — all features must merge here.

```
git checkout -b develop
git push -u origin develop
```

GitHub now shows:

```
main (production)
develop (integration)
```

---

# 🟦 **5. Create Feature Branches**

Feature branches must always start from `develop`.

Example feature branches created:

```
git checkout develop
git checkout -b feature/ui-improvements
git push -u origin feature/ui-improvements

git checkout develop
git checkout -b feature/crud-toast
git push -u origin feature/crud-toast

git checkout develop
git checkout -b feature/improve-navigation
git push -u origin feature/improve-navigation

git checkout develop
git checkout -b feature/testing-cypress
git push -u origin feature/testing-cypress

git checkout develop
git checkout -b feature/webtech-readme
git push -u origin feature/webtech-readme
```

> Result:
> You now have a complete professional branching model.

---

# 🟦 **6. Merge a Feature Branch into `develop` (Pull Request)**

1. Go to GitHub → Pull Requests
2. Click **New Pull Request**
3. Set:

   * **base** = `develop`
   * **compare** = `feature/ui-improvements`
4. GitHub shows “Able to merge”
5. Click **Create Pull Request**
6. Click **Merge Pull Request**
7. Confirm merge
8. Optionally delete the feature branch

> This is exactly how real development teams work.

---

# 🟦 **7. The Full Workflow You Now Have**

### ✔ `main`

Production-ready, stable code only.

### ✔ `develop`

Where all features are merged before release.

### ✔ `feature/*` branches

Where you develop new improvements:

```
feature/ui-improvements
feature/crud-toast
feature/improve-navigation
feature/testing-cypress
feature/webtech-readme
```

### ✔ Pull Requests

Used to merge features into develop (clean and safe).

---

# 🟦 **8. Next Steps (Not Yet Done, Optional)**

For full professional flow:

### 🔹 Create a **release** branch

```
git checkout develop
git checkout -b release/v1.0
git push -u origin release/v1.0
```

### 🔹 After testing, merge release into:

* `main` (production)
* `develop` (sync changes)

### 🔹 Create **hotfix** branch from `main` if urgent fixes are needed

```
git checkout main
git checkout -b hotfix/fix-bug
```

---

# 🟦 **9. Summary — What You Have Learned**

✔ How to connect a local project to GitHub
✔ How to publish a project for your teacher
✔ How to create and push branches
✔ How to follow the Git Flow model used in real companies
✔ How to create pull requests and merge cleanly
✔ How to structure a repository professionally
✔ You now have a full industry-grade workflow

This puts you **far ahead** for software engineering courses and real development work.

---

# 🟦 **10. Commands Cheat Sheet**

```
git status
git add .
git commit -m "message"

git checkout develop
git checkout -b feature/branch-name
git push -u origin feature/branch-name

git checkout develop
git merge feature/branch-name

git branch -d feature/branch-name
git push origin --delete feature/branch-name

git checkout -b release/v1.0
git checkout -b hotfix/fix-something
```

