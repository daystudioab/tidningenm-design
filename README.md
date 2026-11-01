# Tidningen M – Design

WordPress-tillägg för tidningenm.se. Byggt av Studio Day.

Sajtgemensamma designjusteringar som inte går att ställa in i tema eller tillägg:

- `assets/mobilmeny.css` – mobilmenyn (Responsive Menu Pro): svart halvgenomskinlig bakgrund, vita menyval i Manrope versaler, ingen sökruta, menyknappen i höjd med logotypen.
- `assets/sidhuvud.css` – menypunkten med CSS-klassen `menu-cta` (Prenumerera kostnadsfritt) blir en ljusgul knapp längst till höger i sidhuvudet, och en gul rad sist i mobilmenyn. Klassen sätts under Utseende → Menyer → Main.

Tillägget ligger i mappen `wp-content/plugins/m-design/` på sajten (zip-filen och mappen heter `m-design`, inte som repot).

## Ny version

1. Höj `Version:` i `m-design.php` (och `MDS_VERSION` under).
2. Committa och pusha till `main`. Commit-meddelandet blir releasens anteckningar.
3. GitHub Actions ser att versionen är ny, bygger `m-design.zip` och publicerar releasen `v` + versionsnumret.
   Ändringar utan ny version ger ingen release.
4. Sajten visar uppdateringen under **Tillägg** (kollar var 12:e timme, eller direkt via länken *Sök efter uppdateringar* på tilläggets rad).

## Publikt repo

Repot är publikt, så sajten hämtar releaser utan nyckel. Om repot görs privat behöver `wp-config.php` en läsnyckel
(fine-grained token med **Contents: Read-only**): `define( 'STUDIODAY_GITHUB_TOKEN', 'github_pat_…' );`

## Innehåll

- `lib/plugin-update-checker/` – [Plugin Update Checker](https://github.com/YahnisElsts/plugin-update-checker) v5.6 (MIT), sköter uppdateringarna.
