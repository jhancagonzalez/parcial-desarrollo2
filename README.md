# 🧮 Calculadora CI — Parcial 2

![PHP Continuous Integration](https://github.com/jhancagonzalez/parcial-desarollo2/actions/workflows/php-ci.yml/badge.svg)
![PHP Version](https://img.shields.io/badge/PHP-8.2-blue)
![PHPUnit](https://img.shields.io/badge/tested%20with-PHPUnit%2010-green)

Repositorio: https://github.com/jhancagonzalez/parcial-desarollo2

---

## 📋 Descripción

Proyecto desarrollado para el **Parcial 2 de Desarrollo de Software II** de la Universidad del Valle.

Implementa una calculadora con operaciones aritméticas básicas, pruebas unitarias automatizadas con **PHPUnit** e integración continua con **GitHub Actions**, siguiendo el flujo de desarrollo **TDD (Test Driven Development)**.

---

## 🗂️ Estructura del Proyecto

```
parcial-desarrollo2/
├── .github/
│   └── workflows/
│       └── php-ci.yml        # Pipeline de GitHub Actions
├── src/
│   └── Calculadora.php       # Clase con la lógica de negocio
├── tests/
│   └── CalculadoraTest.php   # Pruebas unitarias con PHPUnit
├── composer.json             # Gestor de dependencias
├── phpunit.xml               # Configuración de PHPUnit
└── README.md
```

---

## ⚙️ Tecnologías

| Herramienta | Versión | Uso |
|---|---|---|
| PHP | 8.2 | Lenguaje principal |
| Composer | Latest | Gestor de dependencias |
| PHPUnit | ^10.0 | Pruebas unitarias |
| GitHub Actions | — | Integración Continua (CI) |

---

## 🚀 Instalación y Ejecución Local

**1. Clonar el repositorio:**
```bash
git clone https://github.com/jhancagonzalez/parcial-desarollo2.git
cd parcial-desarollo2
```

**2. Instalar dependencias:**
```bash
composer install
```

**3. Ejecutar las pruebas:**
```bash
./vendor/bin/phpunit tests
```

---

## 🧪 Pruebas Unitarias

| Prueba | Descripción | Estado |
|---|---|---|
| `testSuma` | Verifica que 2 + 3 = 5 | ✅ |
| `testResta` | Verifica que 4 - 3 = 1 | ✅ |
| `testMultiplicacion` | Verifica que 4 * 3 = 12 | ✅ |
| `testDivision` | Verifica que 6 / 3 = 2 | ✅ |
| `testDivisionPorCeroLanzaExcepcion` | Verifica que dividir por 0 lanza `InvalidArgumentException` | ✅ |

---

## 🔄 Flujo TDD aplicado

```
1. 🔴 Red   → Se escribe la prueba antes que el código (falla)
2. 🟢 Green → Se implementa el código mínimo para que pase
3. 🔵 Blue  → Se refactoriza y mejora el código
```

El historial de commits del repositorio refleja este flujo para la función `dividir()`.

---

## 👥 Integrantes

- **Jhancarlos González**
- **Emanuel Giraldo**

---

*Parcial 2 — Desarrollo de Software II | Universidad del Valle*
