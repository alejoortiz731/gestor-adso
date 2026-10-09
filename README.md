# Documentation Técnica - Proyecto Gestor ADSO (Laravel Framework)

---

## 1. Nombre y Propósito del Proyecto

* **Nombre del Proyecto:** `gestor-adso`
* **Programa de Formación:** Análisis y Desarrollo de Software (ADSO) - SENA
* **Propósito General:** 
  El proyecto `gestor-adso` es una solución web construida sobre la arquitectura del framework Laravel. Su objetivo técnico es servir como entorno de prueba y validación para el despliegue de arquitectura backend, configuración de variables de entorno globales, comunicación con motores de bases de datos relacionales mediante el ORM Eloquent, control de versiones con Git y la administración de dependencias del lenguaje PHP a través de Composer. Este proyecto sienta las bases para el desarrollo modular de componentes CRUD dentro del programa de formación.

---

## 2. Herramientas y Versiones Reales del Entorno

Todas las herramientas fueron verificadas directamente desde la consola de comandos de Windows PowerShell en modo administrador, garantizando la compatibilidad con el entorno de ejecución local:

| Herramienta / Software | Versión Detectada | Detalle / Arquitectura | Comando de Verificación |
| :--- | :--- | :--- | :--- |
| **PHP** | `8.0.30` | CLI (ZTS Visual C++ 2019 x64) | `php -v` |
| **Composer** | `2.8.8` | Gestor de paquetes PHP (2025-04-04) | `composer -v` |
| **Git** | `2.54.0.windows.1` | Control de versiones para Windows | `git --version` |
| **Visual Studio Code** | `1.138.0` | Editor de código fuente (x64) | `code --version` |
| **Base de Datos** | MariaDB / MySQL | Módulo integrado dentro de XAMPP | `php -m` (vía `pdo_mysql`) |
| **Sistema Operativo** | Windows 10 / Server 2019 | Datacenter Build 10.0.17763 (AMD64) | `php -i` |

---

## 3. Pasos de Instalación y Configuración del Archivo `.env`

Siga en orden estricto las siguientes instrucciones para clonar, instalar y configurar el proyecto en un nuevo equipo de desarrollo:

### Paso 3.1: Obtención del código fuente
Obtenga el proyecto localmente mediante el sistema de control de versiones Git e ingrese al directorio raíz generado:
```bash
git clone https://github.com/alejoortiz731/gestor-adso.git
cd gestor-adso