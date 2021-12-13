FROM ubuntu:20.04

COPY . /cmake-with-flask

RUN useradd -ms /bin/bash -g root -G sudo techproguser

RUN apt-get update
RUN apt-get install build-essential -y
RUN apt-get install cmake -y
RUN apt install -y python3 python3-pip


RUN pip install --upgrade pip
RUN pip3 install argparse flask

WORKDIR ./build


CMD cmake ../cmake-with-flask

WORKDIR ../cmake-with-flask


CMD ./bin/C && python3 app.py  --port=5000 --host=0.0.0.0