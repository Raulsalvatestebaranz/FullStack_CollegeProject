# GitHub Project Workflow  
Version: 1.0  
Owner: (Your Name)

This document describes how Issues, Branches, Pull Requests, and Project Boards work together to support a professional software development process.  
It applies to both solo developers and small teams.

---

## 1. Project Board (Kanban Workflow)

The project board uses the following standard stages:

### Backlog
Work items that exist but are not yet ready to start.

### To Do
Tasks that are clearly defined and ready to be picked up.

### In Progress
A developer is actively working on the task.

This means:
- A feature branch exists  
- Work is being committed  
- The task has an owner  

### Review
The feature is complete from the developer’s perspective and a Pull Request has been opened.  
The code waits here for review and approval.

### Testing / QA (Optional)
Used for:
- Manual QA  
- Automated test runs (e.g., Cypress, Jest)  
- UI verification  
- Quality checks  

### Done
A task enters **Done** only when:
- The PR is merged into `main`  
- The Issue is closed  
- The feature is complete and stable  

Done does **not** mean:
- Code is written  
- Code is pushed  
- Code “works on my machine”  

Done means: **merged, closed, verified**.

---

## 2. Issue Lifecycle

### Issue Creation
Issues represent:
- Features  
- Improvements  
- Bugs  
- Documentation  
- Testing tasks  

Each Issue should include:
- A clear title  
- A description  
- Acceptance criteria  
- Optional labels  

### Status Transitions
Typical progression:
Backlog → To Do → In Progress → Review → Testing → Done

Transitions should always reflect actual work progress.

### Traceability
Issues link automatically to:
- Feature branches  
- Commits  
- Pull Requests  

This ensures a complete historical record.

---

## 3. Creating Feature Branches

Feature branches should be created directly from the Issue whenever possible.

Naming pattern:
issue-XX-short-description

Generic examples:
- issue-12-dashboard-layout  
- issue-04-initialize-database  
- issue-27-authentication-flow  

Rules:
- One Issue = one feature branch  
- Branches remain focused and small  
- Naming consistency is required  

---

## 4. Pull Request Workflow

### Automatic Linking  
Use these keywords in PR descriptions:
- Fixes #XX  
- Closes #XX  
- Resolves #XX  

GitHub will:
- Automatically link the PR to the Issue  
- Move the project card to Review  
- Close the Issue when the PR is merged  

### Review Stage  
Reviewers evaluate:
- Code quality  
- Functionality correctness  
- Test coverage  
- Documentation updates  
- Readability and maintainability  

### Merge Requirements  
A PR may be merged only if:
- The code is stable  
- Conflicts are resolved  
- Tests pass successfully  
- Review is approved  

### After Merge  
- Issue is closed  
- Card moves to Done  
- Feature branch is deleted (local and remote)  

---

## 5. Definition of Done (DOD)

A task is considered Done only when:

1. The feature branch code is complete  
2. A PR has been opened  
3. The PR has been reviewed  
4. The PR is merged into `main`  
5. The Issue is closed  
6. The Project card moves automatically to Done  

Done is **not**:
- Code saved locally  
- Code pushed without review  
- A feature that is untested  
- An unmerged PR  

Done = **reviewed, merged, complete**.

---

## 6. Summary Workflow Diagram

Issue Created  
↓  
Backlog  
↓  
To Do  
↓  
In Progress (branch created, commits pushed)  
↓  
Review (PR opened)  
↓  
Testing (optional)  
↓  
Done (PR merged and Issue closed)

---

## 7. Team Scalability

This workflow scales for:
- Solo developers  
- Small teams (2–5 members)  
- Medium engineering groups (5–20 members)  

GitHub Flow with Issues + PRs provides:
- Clear task ownership  
- Traceability  
- Low conflict development  
- Fast iteration  
- Professional code history  

Suitable for both student projects and real software teams.

---

## 15. VS Code Integration With the Workflow

This workflow is fully compatible with Visual Studio Code.  
VS Code serves as a GitHub client that allows developers to interact with Issues, Branches, Commits, and Pull Requests directly within the editor.

### 15.1 Issues in VS Code
When GitHub Issues extension is enabled:
- Assigned Issues appear directly in the VS Code sidebar  
- Titles, labels, descriptions, and comments are visible  
- Status updates synchronize with the Project Board  

### 15.2 Creating Feature Branches From Issues
VS Code allows branch creation directly from an Issue:
- Developer selects the Issue  
- VS Code generates a branch using the naming rules  
- The branch is automatically associated with the Issue  
- The workspace switches to the new branch  

### 15.3 Local Development and Commits
Inside VS Code:
- Modified files appear in the Source Control panel  
- Staging and committing are performed from the editor  
- Commit messages follow the workflow standards  
- Commits remain linked to the Issue through the branch  

### 15.4 Pushing Changes
After committing:
- VS Code prompts to push to GitHub  
- Remote branches are created automatically  
- GitHub logs the push activity in the Issue timeline  

### 15.5 Pull Requests (PRs)
Upon completing a task:
- VS Code suggests creating a Pull Request  
- PR description can be written within VS Code  
- PR automatically links to the Issue when keywords ("Fixes #XX") are used  
- The Project Board moves the card to Review  

### 15.6 Review and Testing Integration
VS Code is aware of:
- PR reviews  
- Test results  
- Code checks  
- CI pipeline statuses  

Developers can view these updates without leaving the editor.

### 15.7 Completion and Merge
A task becomes Done only when:
- The PR is merged into `main`  
- The Issue is closed  
- The Project Board reflects the change  

VS Code shows the merged state and suggests deleting the branch.

### 15.8 Branch Cleanup
After merge:
- VS Code allows deleting the local branch with one click  
- GitHub deletes the remote branch automatically  

This keeps the repository clean.

---

## Summary of VS Code + GitHub Workflow Mapping

Issue Created  
↓  
Issue appears in VS Code  
↓  
Developer creates feature branch from Issue  
↓  
Commits & pushes done from VS Code  
↓  
VS Code creates Pull Request  
↓  
GitHub moves Issue to Review  
↓  
Testing, Review, Approval  
↓  
PR merged into main  
↓  
Issue closes automatically  
↓  
VS Code updates branch state  
↓  
Task moves to Done  

---

This integration ensures the workflow is consistent regardless of whether work is done through GitHub’s web interface or entirely through Visual Studio Code.

---

# End of Document
