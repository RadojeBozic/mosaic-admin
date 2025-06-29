# Mosaic Admin - Laravel + Tailwind Admin Panel

**Mosaic Admin** je prilagođen admin panel izgrađen na Laravel + Blade + Tailwind arhitekturi, sa moćnim komponentama i bogatim UI-jem.

---

## 🔧 Instalacija

```bash
git clone https://github.com/tvoj-profil/mosaic-admin.git
cd mosaic-admin
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan migrate
✅ Funkcionalnosti implementirane do sada
✅ Lokalizacija sistema (srpski jezik)

✅ Prilagođen lang/sr/ui.php sa prevodima

✅ Podesene rute, layout i osnovne komponente

✅ Prilagođen prikaz stranica dashboard/analytics i dashboard/fintech

✅ Inicijalna struktura korisnika i planirana integracija sa gbs-platform

✅ Usklađen dizajn i struktura sa realnim poslovnim okruženjem

🌍 Lokalizacija
Prevedeni su svi osnovni elementi UI-ja:

Navigacija

Dugmad

Naslovi i komponente

Validation poruke (priprema za validation.php, auth.php, itd.)

📁 Struktura

resources/
├── views/
│   ├── pages/
│   ├── components/
│   └── layouts/
├── lang/
│   ├── en/
│   └── sr/
🚀 Planovi
Povezivanje sa korisnicima iz gbs-platform preko API-ja

Upravljanje porukama korisnika i sadržajem platforme

Admin dashboard sa statistikom i upravljanjem sistemom

🤝 Licence
MIT © GBS Platforma — Sva prava zadržana




