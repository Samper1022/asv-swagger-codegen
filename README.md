asv-swagger-codegen

```docker run -u root --rm -d -p 8080:8080 -p 50000:50000 -v jenkins-data:/var/jenkins_home -v /var/run/docker.sock:/var/run/docker.sock jenkinsci/blueocean```


```docker run --rm -d -p 9000:9000 -v sonarqube-conf:/opt/sonarqube/conf -v sonarqube-data:/opt/sonarqube/data -v sonarqube-extensions:/opt/sonarqube/logs -v sonarqube-bundled-plugins:/opt/sonarqube/extensions --name sonarqube sonarqube:7.7-community```