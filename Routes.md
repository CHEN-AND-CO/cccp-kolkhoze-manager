# Routes et points d'entrée

## Symfony

### FrontOffice
```
/
/{user}
/{user}/trips/list
/{user}/trips/create
/{user}/trips/edit/{id}
/{user}/edit
```
### BackOffice
```
/admindep/
		/stats
		/user/add/
		/user/read/{user}
		/user/edit/{user}
		/user/delete/{user}
		/user/list/
		/service/add/
		/service/read/{service}
		/service/list/
		/service/edit/{service}
		/service/delete/{service}
		/societe/add/
		/societe/read/{societe}
		/societe/list/
		/societe/edit/{societe}
		/societe/delete/{societe}
		/deplacement/{id}/read/{deplacement}
		/deplacement/{id}/list/
		/deplacement/{id}/edit/{deplacement}
```
## WebService
```
/api/
	/trips/
	/trips/{user}
	/trips/{user}/{year}/{month}
	/user/{user}
```