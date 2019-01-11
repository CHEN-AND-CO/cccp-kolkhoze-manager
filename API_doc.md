# Web service API et format de données

Format d'entrée via requêtes POST
En sortie : JSON

## Routes d'API
* `/trips` : Récupère tous les déplacements de tous les utilisateurs
* `/trips/:uid` : Récupère les déplacements de l'utilisateur d'identifiant `uid`
* `/trips/:uid/:year/:month` : Récupére les déplacements effectués par l'utilisateur `uid` durant l'année `year` et le mois `month`
* `/u/:uid` : Récupère l'utilisateur `uid`
