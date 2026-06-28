# Contributing to Larafolio

Thank you for your interest in contributing to Larafolio! This document provides guidelines and instructions for contributing to this project.

## 📋 Table of Contents

- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [Development Workflow](#development-workflow)
- [Commit Guidelines](#commit-guidelines)
- [Pull Request Process](#pull-request-process)
- [Coding Standards](#coding-standards)

## Code of Conduct

- Be respectful and inclusive
- Focus on constructive feedback
- Keep discussions professional and on-topic

## Getting Started

1. **Fork** the repository
2. **Clone** your fork locally
3. **Create a branch** for your feature or fix
4. **Set up** your development environment (see README.md)

## Development Workflow

### Branch Naming Convention

- `feature/description` - New features
- `fix/description` - Bug fixes
- `docs/description` - Documentation changes
- `refactor/description` - Code refactoring
- `test/description` - Adding or updating tests

Example: `feature/add-skill-categories`, `fix/responsive-mobile-menu`

### Commit Guidelines

We follow [Conventional Commits](https://www.conventionalcommits.org/) specification:

**Format:** `type(scope): description`

**Types:**
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Code style changes (formatting, semicolons, etc.)
- `refactor`: Code refactoring
- `perf`: Performance improvement
- `test`: Adding or updating tests
- `chore`: Build process or auxiliary tool changes

**Examples:**
```bash
git commit -m "feat(auth): add two-factor authentication"
git commit -m "fix(ui): resolve mobile navigation overlap"
git commit -m "docs(readme): update installation instructions"
```

### Before Committing

1. **Run tests:** `npm run test` and `php artisan test`
2. **Check code style:** `npm run lint` and `./vendor/bin/phpcs`
3. **Update documentation** if needed
4. **Ensure all assets are compiled:** `npm run build`

## Pull Request Process

1. **Update documentation** if your changes affect functionality
2. **Add tests** for new features or bug fixes
3. **Ensure CI passes** (all tests and checks must pass)
4. **Request review** from maintainers
5. **Address feedback** and update your PR
6. **Squash commits** if you have multiple small commits

### PR Title Format

Use the same format as commits: `type(scope): description`

### PR Description Template

```markdown
## Description
Brief description of changes

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Breaking change
- [ ] Documentation update

## Testing
Describe testing performed

## Checklist
- [ ] Code follows project standards
- [ ] Self-review completed
- [ ] Comments added where necessary
- [ ] Documentation updated
- [ ] Tests added/updated
- [ ] No new warnings
```

## Coding Standards

### PHP Standards

- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards
- Use type hints and return types where possible
- Write meaningful variable and function names
- Keep functions/methods small and focused
- Add PHPDoc comments for complex logic

### JavaScript Standards

- Use ES6+ features where appropriate
- Prefer `const` and `let` over `var`
- Use meaningful variable names
- Add JSDoc comments for complex functions
- Follow consistent formatting (Prettier)

### CSS/Tailwind Standards

- Use Tailwind utility classes where possible
- Avoid custom CSS unless necessary
- Follow mobile-first responsive design
- Use CSS variables for theme colors

## 🚀 Quick Start for Contributors

```bash
# 1. Fork and clone
git clone https://github.com/your-username/larafolio.git
cd larafolio

# 2. Create branch
git checkout -b feature/your-feature

# 3. Make changes and test
# ... make your changes ...
npm run test
php artisan test

# 4. Commit with conventional format
git add .
git commit -m "feat(scope): your feature description"

# 5. Push and create PR
git push origin feature/your-feature
```

## 📧 Contact

For questions or suggestions, please open an issue or contact the maintainers.

---

**Thank you for contributing to Larafolio! 🎉**