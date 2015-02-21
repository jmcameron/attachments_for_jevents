# Makefile for linux

VERSION = "3.2.0-Beta3"
VERSION2 = $(shell echo $(VERSION)|sed 's/ /-/g')
ZIPFILE = plg_attachments_for_jevents_$(VERSION2).zip

FILES = *.php *.xml language/*/*

all: $(ZIPFILE)

ZIPIGNORES = -x "*.zip" -x "*~" -x "*.git/*" -x "*.gitignore" -x Makefile

$(ZIPFILE): $(FILES)
	@echo "-------------------------------------------------------"
	@echo "Creating plugin zip file: $(ZIPFILE)"
	@echo ""
	@zip -r $@ * $(ZIPIGNORES)
	@echo "-------------------------------------------------------"
	@echo "done"
