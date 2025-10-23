# Laravel Product Management Application

Šī ir Laravel bāzēta web aplikācija produktu pārvaldībai. Lietotāji var izveidot, skatīt, rediģēt un dzēst produktus. Katram produktam ir nosaukums, daudzums un apraksts.

## Funkcionalitāte

- Visu produktu saraksta skatīšana ar kopējo skaitu
- Jaunu produktu izveidošana ar validāciju (unikāls nosaukums, maksimālais garums, obligātie lauki)
- Detalizētas informācijas skatīšana par katru produktu
- Esošo produktu rediģēšana
- Produktu dzēšana

## Instalācija un Uzstādīšana

### Priekšnosacījumi

- PHP >= 8.1
- Composer
- Node.js un npm
- MySQL vai cita datubāze

### Instalācijas Soļi

1. **Klonē repozitoriju uz savu lokālo mašīnu:**
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Instalē PHP atkarības ar Composer:**
   ```bash
   composer install
   ```

3. **Instalē Node.js atkarības ar npm:**
   ```bash
   npm install
   ```

4. **Konfigurē vides failu:**
   - Nokopē `.env.example` failu uz `.env`:
     ```bash
     cp .env.example .env
     ```
   - Atver `.env` failu un konfigurē datubāzes savienojuma iestatījumus:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

5. **Ģenerē aplikācijas atslēgu:**
   ```bash
   php artisan key:generate
   ```

6. **Izpildi datubāzes migrācijas:**
   ```bash
   php artisan migrate
   ```

7. **Inicializē npm projektu (ja nepieciešams):**
   ```bash
   npm init -y
   ```

## Testa Datu Ielādēšana

Lai ielādētu testa datus, vari izmantot vienu no šīm metodēm:

### 1. Izmantojot Seeder (ieteicams)

Ja projektā ir izveidots seeder, izmanto:
```bash
php artisan db:seed
```

Vai konkrēts seeder:
```bash
php artisan db:seed --class=ProductSeeder
```

### 2. Manuāli caur aplikāciju

Pēc aplikācijas palaišanas izmanto "Create Product" pogu, lai manuāli pievienotu produktus.

### 3. Tiešā SQL ievadīšana

Izmantojot MySQL klientu vai phpMyAdmin, vari ievadīt datus tieši:
```sql
INSERT INTO products (name, quantity, description, created_at, updated_at) 
VALUES 
('Laptop', 10, 'High-performance laptop', NOW(), NOW()),
('Mouse', 50, 'Wireless mouse', NOW(), NOW()),
('Keyboard', 30, 'Mechanical keyboard', NOW(), NOW());
```

## Aplikācijas Palaišana

### 1. Palaid Laravel izstrādes serveri:
```bash
php artisan serve
```

Serveris būs pieejams adresē: `http://localhost:8000`

### 2. Palaid Vite izstrādes serveri (frontend asset kompilēšanai):
```bash
npm run dev
```

### 3. Atvēr pārlūkprogrammu un dodies uz:
```
http://localhost:8000/products
```

## Aplikācijas Lietošana

### Produktu Saraksts
- Apmeklē galveno lapu `/products`, lai redzētu visus produktus
- Tiek attēlots kopējais produktu skaits

### Jauna Produkta Izveidošana
1. Noklikšķini uz "Create Product" vai "Add New Product" pogas
2. Aizpildi formu:
   - **Nosaukums**: Unikāls, maksimums 20 simboli
   - **Daudzums**: Skaitlis (obligāts)
   - **Apraksts**: Teksts (obligāts)
3. Noklikšķini "Submit" vai "Create"
4. Produkts tiks pievienots datubāzē un parādīsies sarakstā

### Produkta Detaļu Skatīšana
- Noklikšķini uz produkta nosaukuma sarakstā
- Tiks attēlota detalizēta informācija par produktu

### Produkta Rediģēšana
1. Atver produkta detaļu lapu
2. Noklikšķini uz "Edit" pogas
3. Izmanto nepieciešamās izmaiņas formā
4. Noklikšķini "Update" vai "Save"

### Produkta Dzēšana
1. Atver produkta detaļu lapu
2. Noklikšķini uz "Delete" pogas
3. Apstiprina dzēšanu (ja ir paredzēts)
4. Produkts tiks izdzēsts no datubāzes

## Projekta Struktūra

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── ProductController.php    # Galvenais kontrolieris
├── resources/
│   └── views/
│       └── products/
│           ├── index.blade.php         # Produktu saraksts
│           ├── create.blade.php        # Izveidošanas forma
│           ├── show.blade.php          # Produkta detaļas
│           ├── edit.blade.php          # Rediģēšanas forma
│           ├── layout.blade.php        # Pamata izkārtojums
│           └── navigation.blade.php    # Navigācija
├── routes/
│   └── web.php                         # Maršruti
└── public/
    └── css/
        └── app.css                     # Stili

```

## Tehnoloģijas

- **Backend**: Laravel PHP Framework
- **Frontend**: Blade Templates, CSS
- **Datubāze**: MySQL
- **Asset Bundling**: Vite
- **Dependency Management**: Composer (PHP), npm (JavaScript)

## Papildu Komandas

### Kešatmiņas tīrīšana:
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Migrāciju atkārtota palaišana:
```bash
php artisan migrate:fresh
```

### Migrāciju atkārtota palaišana ar seediem:
```bash
php artisan migrate:fresh --seed
```

## Problēmu Novēršana

**Problēma**: Nevar savienoties ar datubāzi
- Pārbaudi `.env` faila datubāzes iestatījumus
- Pārliecinies, ka MySQL serveris darbojas
- Pārbaudi, vai datubāze eksistē

**Problēma**: 404 kļūda
- Pārbaudi, vai Laravel serveris darbojas (`php artisan serve`)
- Pārliecinies, ka izmanto pareizo URL: `http://localhost:8000/products`

**Problēma**: CSS stili neielādējas
- Palaid `npm run dev` vai `npm run build`
- Pārbaudi, vai Vite serveris darbojas

## Licence

Šis projekts ir atvērtā pirmkoda programmatūra.
