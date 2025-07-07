# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Architecture

This is a Laravel 12 application with a React frontend using Inertia.js for seamless server-side rendering. The stack includes:

- **Backend**: Laravel 12 with PHP 8.2+, strict type declarations enabled
- **Frontend**: React 19 with TypeScript, Inertia.js for SPA-like experience
- **UI Components**: Radix UI primitives with Tailwind CSS v4 and shadcn/ui patterns
- **Testing**: Pest PHP for backend testing
- **Code Quality**: PHPStan (level 6), Laravel Pint, Rector for PHP; ESLint, Prettier for TypeScript

## Development Commands

### Starting Development
```bash
# Full development environment with all services
composer run dev
```

### Testing
```bash
# Run all tests
composer test

# Run specific test file
php artisan test --filter=TestClassName

# Run single test method
php artisan test --filter=test_method_name
```

### Code Quality
```bash
# PHP code style and static analysis
vendor/bin/pint                    # Fix code style
vendor/bin/phpstan analyse --memory-limit=2G         # Static analysis
vendor/bin/rector process          # Code refactoring

# TypeScript/JavaScript
npm run lint                       # ESLint with auto-fix
npm run format                     # Prettier formatting
npm run format:check              # Check formatting
npm run types                      # TypeScript type checking
```

### Build Commands
```bash
npm run build                      # Production build
npm run build:ssr                 # Build with SSR
```

## Project Rules

You are an expert in PHP, Laravel, React, Inertia.js, Pest, and Tailwind.

### Coding Standards:
- Use the latest PHP 8.4 features.
- Use `pint.json` for coding standards.
- Be strict with types, including array shapes using PHPStan.
- SOLID principles should be applied.

### Project Structure & Architecture

- When creating a new file, remove the existing `.gitkeep` file.
- Don't use the `DB::` facade directly if you could use `Model::query()` instead.
- Never add/update/delete a dependency without asking me first.
- Enum logic should be in codebase, not in database. Store enums as strings in database and cast them on model classes to enums.

- `app/Http/Controllers` - Controllers.
- Don't use the abstract `Controller.php`, or any other base controller.
- Controllers handle HTTP-specific concerns only
- Controllers deal with request validation
- Controllers handle route parameters
- Controllers return appropriate HTTP responses
- Controllers manage redirects
- Controllers pass data to views
- Controllers should never mix resourceful methods (index, create, store, show, edit, update, destroy) with custom methods.

- `app/Http/Requests` - Form requests.
- Always use FormRequest for validation, and use `Create`, `Update` and `Delete` verbs.

- `app/Actions` - Business logic.
- Always use the actions pattern, and use `Create`, `Update` and `Delete` verbs followed by `Action` suffix.
- Use `execute` method for the main action logic
- Actions contain the actual business logic
- Actions should be single-purpose classes that do one thing well
- Actions should be independent of HTTP concerns
- Actions should be highly testable in isolation
- Actions should represent a single action or operation in your domain

- `app/Models` - Eloquent models.
- Don't use `fillable` in models.

E.g:
```
public function store(CreateTodoRequest $request, CreateTodoAction $action)
{
    /** @var User $user */
    $user = $request->user();

    $action->execute($user, $request->validated());
    
    // ...
}
```

E.g:
```
<?php

declare(strict_types=1);

namespace App\Actions;

final readonly class CreateTodoAction
{
    public function execute(): void
    {
        DB::transaction(function (): void {
            //
        });
    }
}
```

- Since Laravel 12 Middleware is bootstrapped in `bootstrap/app.php`, not in `app/Http/Kernel.php`.

### Testing
- Use Pest PHP for all tests.
- Run composer lint after changes.
- All code must be tested.
- Generate a {Model}Factory with each model.

### Test Directory Structure
- Console: tests/Feature/Console
- Controllers: tests/Feature/Http
- Actions: tests/Unit/Actions
- Models: tests/Unit/Models
- Jobs: tests/Unit/Jobs

### Styling & UI
- Use Tailwind CSS for styling.
- Use a very minimal UI design.
- Whenever possible, use `shadcn/ui` for components.
- Alternately, use `radix-ui` for components or whatever comes with the project.
- If you need to use something else, ask me first.

### Commands
- Never run the terminal command "php artisan serve".

### Permissions
- You have access to the vendor directory.
- You have access to storage/logs/laravel.log file.

## Key Architecture Patterns

### Inertia.js Integration
- Pages are React components in `resources/js/pages/`
- Controllers return Inertia responses with `Inertia::render()`
- Layouts are in `resources/js/layouts/` with nested layout structure
- SSR is enabled and configured in `config/inertia.php`

### Frontend Structure
- **Components**: Reusable UI components in `resources/js/components/`
- **UI Components**: shadcn/ui style components in `resources/js/components/ui/`
- **Layouts**: App shell, auth layouts, and settings layouts
- **Pages**: Route-specific page components
- **Hooks**: Custom React hooks for state management
- **Types**: TypeScript definitions in `resources/js/types/`

### Backend Structure
- **Routes**: Web routes in `routes/web.php`, auth routes in `routes/auth.php`, settings in `routes/settings.php`
- **Controllers**: Standard Laravel controllers with strict typing
- **Middleware**: Custom middleware for appearance handling and Inertia requests
- **Models**: Eloquent models with strict typing

### State Management
- Appearance/theme state managed via custom hooks and cookies
- User authentication state through Laravel's built-in auth system
- Component state via React hooks and context where needed

## Development Workflow

1. **PHP Code**: Follow Laravel conventions, use strict types, maintain PHPStan level 6
2. **Frontend Code**: Use TypeScript, follow React best practices, maintain component composition
3. **Testing**: Write Pest tests for new features, use Laravel's testing utilities
4. **Code Style**: Run Pint and Prettier before committing
5. **Type Safety**: Ensure PHPStan and TypeScript pass without errors

## Important Notes

- All PHP files use `declare(strict_types=1)`
- Frontend uses React 19 with automatic JSX transform
- Tailwind CSS v4 with @tailwindcss/vite plugin
- SSR is enabled - test both client and server rendering
- Code quality tools are configured strictly - maintain compliance

## Common Tasks

### Adding New Pages
1. Create React component in `resources/js/pages/`
2. Add route in appropriate routes file
3. Create controller method returning `Inertia::render()`
4. Add TypeScript types if needed

### Adding UI Components
1. Create component in `resources/js/components/ui/` (for reusable UI)
2. Follow existing patterns with Radix UI + Tailwind
3. Export from appropriate index file
4. Add TypeScript props interface

### Database Changes
1. Create migration: `php artisan make:migration`
2. Update models with proper typing
3. Run migration: `php artisan migrate`
4. Update seeders if needed