asv-swagger-codegen

```docker run --name jenkins-asv -u root --rm -d -p 8080:8080 -p 50000:50000 -v jenkins-data:/var/jenkins_home -v /var/run/docker.sock:/var/run/docker.sock jenkinsci/blueocean```


```docker run --name sonarqube-asv --rm -d -p 9000:9000 -p 9092:9092 -v sonarqube-conf:/opt/sonarqube/conf -v sonarqube-data:/opt/sonarqube/data -v sonarqube-extensions:/opt/sonarqube/logs -v sonarqube-bundled-plugins:/opt/sonarqube/extensions sonarqube:7.7-community```



Optional:

`docker run --name jenkins-asv -u root --rm -d -p 8080:8080 -p 50000:50000 -v jenkins-data:/var/jenkins_home -v /var/run/docker.sock:/var/run/docker.sock -e SONARQUBE_HOST=http://192.168.1.7:9000 jenkinsci/blueocean`