DEBUG = no

#
#	Softwares
#
PHP = php
CONSOLE = $(PHP) bin/console

#
#	Folders
#


#
#	Needed files
#


#
#	Output software name
#

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
.PHONY: help clearCache list view bundle controller entity form

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


