
clean:
	rm -rf *.zip

zip: clean
	zip -r atenea.zip * -x '*.git*' -x 'Makefile' -x 'README.md'
