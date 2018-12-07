DEBUG = no

#
#	Softwares
#
PHP = php
CONSOLE = $(PHP) bin/console

#
#	Folders
#
BASES = ~/Bureau/Web/Bases/Symfony
TEMPLATES = $(BASES)/templates

#
#	Needed files
#


#
#	Output software name
#
ACTDIR = $(shell basename $(CURDIR))

#
#	Flags
#


#
#	Link flags
#


#
#	Others
#


#
#	Rules
#
all:
	

#
#	Implicit rules
#
.PHONY: help clearCache list view bundle controller entity form server fromDatabase

#verif:
#ifndef ARG
#	@echo "Veuillez préciser un argument avec ARG="
#	exit 1
#endif

help:
	$(CONSOLE) help

list:
	$(CONSOLE) list

clearCache:
	sudo $(CONSOLE) cache:clear
	sudo chmod -R 777 var

view:
ifndef BUNDLE
	@echo "Veuillez préciser le Bundle avec BUNDLE="
	exit 1
else
ifndef PAGE
	@echo "Veuillez préciser le nom de la vue avec PAGE="
	exit 1
else
	mkdir -p src/$(BUNDLE)Bundle/Resources/views/
	cp $(TEMPLATES)/page.html.twig src/$(BUNDLE)Bundle/Resources/views/$(PAGE).html.twig
	make clearCache
endif
endif

bundle:
	$(CONSOLE) generate:bundle
	make clearCache

controller:
	$(CONSOLE) generate:controller
	make clearCache

entity:
	$(CONSOLE) doctrine:generate:entity
	$(CONSOLE) doctrine:schema:update --dump-sql
	$(CONSOLE) doctrine:schema:update --force

form:
ifndef BUNDLE
	@echo "Veuillez préciser le Bundle avec BUNDLE="
	exit 1
else
ifndef ENTITY
	@echo "Veuillez préciser l'entité à utiliser avec ENTITY="
	exit 1
else
	$(CONSOLE) doctrine:generate:form $(BUNDLE)Bundle:$(ENTITY)
endif
endif

fromDatabase:
ifndef BUNDLE
	@echo "Veuillez préciser le Bundle à utiliser avec BUNDLE="
	exit 1
else
	$(CONSOLE) doctrine:mapping:import --force $(BUNDLE)Bundle annotation
endif

server:
	$(CONSOLE) server:run


