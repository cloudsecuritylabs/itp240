FROM ubuntu
RUN apt-get update
RUN apt-get install -y build-essential
COPY hello.c /
RUN make hello
CMD /hello
MAINTAINER Ankan Basu <basu.ankan@gmail.com>