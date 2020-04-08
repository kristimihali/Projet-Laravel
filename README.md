# Projet Laravel
Bonjour,

Voici notre projet compte rendu Laravel.

Vous pouvez trouver notre code source sur Github 
https://github.com/kristimihali/Projet-Laravel

En autre, vous pouvez aussi visiter notre demo en ligne.
https://projet-laravel.zhangzhao.fr

**Pour les information pratiques**
frontend: https://projet-laravel.zhangzhao.fr
backend: https://projet-laravel.zhangzhao.fr/admin
frontend account: user@user.com / user
backend account: admin@admin.com / admin

#### Group
MIHALI Kristi
ZHANG Zhao

#### Remarque
On génère les images par lorempixel.com, il charge trop lente.

#### Requirements
* npm / node
* composer
* php 7.3

#### Installation

1) git clone git@github.com:kristimihali/Projet-Laravel.git
2) ```copy .env.sample .env```
3) Change les valeurs suivantes 
```APP_URL```、
```GOOGLE_CLIENT_ID```、
 ```GOOGLE_CLIENT_SECRET```、
```GOOGLE_REDIRECT_URL```、
```GITHUB_CLIENT_ID```、
```GITHUB_CLIENT_SECRET```、
```GITHUB_REDIRECT_URL```、
4) ```composer install```
5) ```chmod -R 777 storage```
6) ```composer dump-autoload```
7) ```php artisan migrate:fresh --seed && php artisan voyager:install```
8) ```php artisan storage:link```
9) ```chmod 777 database/database.sqlite```
10) ```npm install```
11) ```npm run production```

#### Tâche réalisé
* [x] **Pages** Accueil / Articles / un article
* [x] **Formulaire** de contact / Gestion des commentaires / Newsletters
* [x] **CRUD** Post / Contact / Comment /Newsletters
* [x] Fichiers **média** pour les articles
* [x] **Identification Auth / Socialite** && Package d’administration (**Voyager**)
* [x] **Seeds** Users / Post / Contact / Comment / Newsletters / MenuItem / DataTypes / DataRows / Settings 
* [x] **Factory** Users / Post / Contact / Comment / Newsletters
* [x] Intégration graphique responsive en utilisant **Sass** **Laravel Mix**
* [x] Utilisation du framework Javascript **VueJS**

#### Tâche non réalisé
* [ ] 9 - Tests unitaires
* [ ] 10 - Une application de gestion de fichiers avec catégorisation, VueJS, multi-upload,authentification
* [ ] 11 - Un Webchat avec Pusher et Vue.js
* [ ] 12 - Surprise!

#### Démonstration

###### Page d'accueil - https://projet-laravel.zhangzhao.fr
<img src="https://imgur.com/pKxAHI3.png"/>

###### Page d'articles - https://projet-laravel.zhangzhao.fr/articles
<img src="https://imgur.com/1jsRYmO.png"/>

###### Page d'un article 
https://projet-laravel.zhangzhao.fr/article/Mafalda(non connecté)
<img src="https://imgur.com/EoJL5EL.png"/>
 https://projet-laravel.zhangzhao.fr/article/Daphney (connecté)
<img src="https://imgur.com/ZcT86jd.png"/>
###### Page contact  - https://projet-laravel.zhangzhao.fr/contact
<img src="https://imgur.com/HSmELPj.png"/>

###### Page register  - https://projet-laravel.zhangzhao.fr/register
<img src="https://imgur.com/cKg4Wbc.png"/>

###### Page login (Utilisateur)  - https://projet-laravel.zhangzhao.fr/login
<img src="https://imgur.com/icpupqJ.png"/>

###### Page dashboard (Utilisateur)  - https://projet-laravel.zhangzhao.fr/profile
<img src="https://imgur.com/K3AniZt.png"/>

###### Page modification d'un article (Utilisateur)  - https://projet-laravel.zhangzhao.fr/article/edit/15
<img src="https://imgur.com/xoNiwib.png"/>

###### Page création d'un article (Utilisateur)  - https://projet-laravel.zhangzhao.fr/create
<img src="https://imgur.com/TCkVaTN.png"/>

###### Page d'administrator voyager (Administrator)  - https://projet-laravel.zhangzhao.fr/admin/posts
<img src="https://imgur.com/luTYbpl.png"/>
<img src="https://imgur.com/vERJFiZ.png"/>
<img src="https://imgur.com/67BqTXi.png"/>



