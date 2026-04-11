# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Minimal Symfony 7.3 application using the MicroKernelTrait pattern. The project has no database, no tests, and no frontend assets yet.

## Architecture

- **Kernel**: Uses `Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait` for a lightweight kernel
- **Routing**: PHP 8 attributes on controllers (`#[Route(...)]`)
- **Controllers**: Located in `src/Controller/`, extend `AbstractController`

## Template Rendering

**Le rendu des templates doit se faire avec Symfony UX.** Ne pas utiliser le rendu Twig traditionnelles. Utiliser les composants Symfony UX (Symfony UX Turbo, Symfony UX Charts, etc.) pour toute interface utilisateur.

## Commands

```bash
# Install dependencies
composer install

# Run the development server
symfony serve

# Run the development server on a specific port
symfony serve -d 8001

# Clear cache
bin/console cache:clear

# List available routes
bin/console debug:router
```

## Key Files

- `config/routes..yaml` - Imports controllers from `src/Controller/` using attribute routing
- `config/services.yaml` - Service container configuration with autowiring
- `config/packages/framework.yaml` - Framework configuration
