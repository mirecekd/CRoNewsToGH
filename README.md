# Stream news from Czech radio (Zpravodajství Radiožurnálu) to Google Home 

Until there exists official support from Google for Google Home in Czech republic this is little hack/script to stream hourly news to Google Home/Chromecast (as Alexa/Echo users already can).

## Prerequisities 

Linux machine (I am using RPI), running PHP server (accessible from IFTTT servers) and NodeJS.

There must be properly configured some "chromecast" streaming app (I am using [chromecast-cli](https://github.com/erkstruwe/chromecast-cli))

## IFTTT configuration

### For multiple GH instances 

we need to identify which Google Home to use. I'm using downstairs/upstairs

#### Hey Google, RSS downstairs|upstairs

If this -> Google Assistant -> Say phrase with text ingredient

What do you want to say? 

```
RSS $
```

or

### For just one GH  

#### Hey Google, RSS

If this -> Google Assistant -> Say simple phrase

What do you want to say? 

```
RSS $
```

Than -> Make a web request

URL

```your.server.cz/rss.php```

POST Method, application/x-www-form-urlencoded

BODY

```secret=S3kretK3j&command={{TextField}}```

## Podcast from Czech radio - Zpravodajství (Radiožurnál)
http://static.rozhlas.cz/news/radiozurnal/podcast.rss

## Known error
Podcasts are generated hourly from live stream, when you trigger news too early in hour it will play nothing (as file does not exists). 
Most probably i will not even try to fix it :)
