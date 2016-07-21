.PHONY: build push

PREFIX ?= pavlov/yourls
TAG ?= latest

build:
	docker build -t $(PREFIX):$(TAG) .

push: build
	docker push $(PREFIX):$(TAG)
