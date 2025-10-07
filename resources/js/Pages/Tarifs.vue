<template>
	<div>
		<Head title="Tarifs – Création de site et application | Julien Kennel" />

		<div class="hero hero-inner" style="background: url('images/fond_noir_2.jpg') center/cover no-repeat fixed;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">Tarifs</h1>
							<p class="text-white">
								<!-- Mes technologies préférées que j'utilise au quotidien. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="mb-3">Choisissez la formule adaptée à votre projet</h2>
    <p class="mb-0">
      Que vous ayez besoin d’un site vitrine simple ou d’une application métier complexe, je propose plusieurs forfaits pour répondre précisément à vos besoins, avec transparence sur les technologies, la sécurité, et les délais.
    </p>
  </div>
</section>

		<!-- Forfait Essentiel (image droite) -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-1">
          <h2>Forfait Essentiel – Vitrine simple (1 à 5 pages)</h2>
          <ul>
            <li><strong>Contenu :</strong> Accueil, À propos, Services, Contact, Mentions légales</li>
            <li><strong>Technos :</strong> Laravel + Vue 3</li>
            <li><strong>Responsive :</strong> Oui (mobile/tablette/desktop)</li>
            <li><strong>Sécurité :</strong> Base Laravel (CSRF, validation, etc.)</li>
            <li><strong>Hébergement :</strong> Non inclus</li>
            <li><strong>Durée estimée :</strong> ~15 heures</li>
            <li><strong>Prix :</strong> 750 EUR TTC</li>
          </ul>
        </div>
        <div class="col-md-6 order-md-2">
          <img
            src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
            alt="Développement web simple"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Forfait Standard (image gauche) -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
          <h2>Forfait Standard – Vitrine étendue (6 à 10 pages)</h2>
          <ul>
            <li><strong>Contenu :</strong> Comme Essentiel + pages supplémentaires (équipe, portfolio…)</li>
            <li><strong>Structure :</strong> Mise en page modulaire, sections réutilisables</li>
            <li><strong>Design :</strong> CSS custom ou framework type bootstrap / Tailwind</li>
            <li><strong>Durée estimée :</strong> ~25 heures</li>
            <li><strong>Prix :</strong> 1 250 EUR TTC</li>
          </ul>
        </div>
        <div class="col-md-6 order-md-1">
          <img
            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80"
            alt="Web design étendu"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Forfait Dynamique (image droite) -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-1">
          <h2>Forfait Dynamique – Vitrine avec back-office simple (actualités)</h2>
          <ul>
            <li><strong>Contenu :</strong> Jusqu’à 10 pages</li>
            <li><strong>Admin :</strong> Module actualités/blog (CRUD avec upload d’image)</li>
            <li><strong>Sécurité :</strong> Authentification / rôles</li>
            <li><strong>Technos :</strong> Laravel API + Vue 3 admin-panel</li>
            <li><strong>Durée estimée :</strong> ~35 heures</li>
            <li><strong>Prix :</strong> 1 750 EUR TTC</li>
          </ul>
        </div>
        <div class="col-md-6 order-md-2">
          <img
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80"
            alt="Back-office et gestion"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Forfait Sur-Mesure (image gauche) -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
          <h2>Forfait Sur-Mesure – Vitrine + back-office avancé</h2>
          <ul>
            <li><strong>Contenu :</strong> Jusqu’à 15 pages + modules dynamiques</li>
            <li><strong>Admin :</strong> Actualités, galerie, témoignages, carte interactive, utilisateurs, filtres, statistiques…</li>
            <li><strong>Sécurité :</strong> Auth avec rôles, validation, permissions</li>
            <li><strong>Technos :</strong> Laravel backend + Vue 3 SPA ou Inertia</li>
            <li><strong>Cartographie :</strong> VueLeaflet + données PostgreSQL (PostGIS)</li>
            <li><strong>Durée estimée :</strong> ~50 heures</li>
            <li><strong>Prix :</strong> 2 500 EUR TTC</li>
          </ul>
        </div>
        <div class="col-md-6 order-md-1">
          <img
            src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?auto=format&fit=crop&w=600&q=80"
            alt="Développement sur-mesure"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Applications métiers / projets complexes (image gauche) -->
  <section class="py-5 bg-vert">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
          <h2>Applications métiers / projets complexes : sur devis</h2>
          <p>
            Vous avez un besoin spécifique ou un outil métier à développer ? Je conçois des applications web sur mesure, connectées à vos données, adaptées à vos processus internes, souvent bien au-delà d’un simple site vitrine.
          </p>
          <p><strong>Exemples :</strong></p>
          <ul>
            <li>Portail de gestion interne</li>
            <li>Tableaux de bord interactifs</li>
            <li>Gestion de planning ou ressources</li>
            <li>Cartographie de données métier (VueLeaflet + PostGIS)</li>
            <li>Interfaces métiers connectées à une API ou à un SSO</li>
          </ul>
          <p class="mt-3">
            👉 Chaque projet fait l’objet d’un devis personnalisé, établi après réception de votre cahier des charges ou d’un échange sur vos besoins.
          </p>
        </div>
        <div class="col-md-6 order-md-1">
          <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80"
            alt="Projets complexes et applications métiers"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Options & Modules additionnels (image droite) -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-1">
          <h2>Options & Modules additionnels</h2>
          <ul>
            <li>Carte interactive (VueLeaflet + PostGIS) : à partir de 300 EUR</li>
            <li>Authentification avancée (rôles + permissions) : 150 EUR</li>
            <li>Import/Export CSV (backend Laravel) : 100 – 200 EUR</li>
            <li>Site multilingue : 200 – 400 EUR</li>
            <!-- <li>Maintenance mensuelle (correctifs & MAJ) : 50 EUR / mois</li> -->
            <li>Hébergement géré (1 site/app) : à partir de 100 EUR / an</li>
            <li>Formation à l’admin (1h visio + guide PDF) : 100 EUR</li>
            <!-- <li>SEO technique (base) : 150 EUR</li> -->
            <!-- <li>Rédaction de contenu : sur devis</li> -->
          </ul>
        </div>
        <div class="col-md-6 order-md-2">
          <img
            src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
            alt="Options et modules"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </div>
  </section>

  
	</div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>