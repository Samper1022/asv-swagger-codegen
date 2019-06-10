pipeline {
    agent {
        docker {
            label 'docker'
            image 'maven:3.6.0-jdk-8'
            args '-v maven-repo:/root/.m2 -v sonar-repo:/root/.sonar'
            reuseNode true
        }
    }

    options {
        timestamps()
    }

    post {
        // success {
        //     updateGitlabCommitStatus name: 'Build-Finished', state: 'success'
        // }
        // failure {
        //     updateGitlabCommitStatus name: 'Build-Finished', state: 'failed'
        // }
        always {
            junit 'modules/**/target/surefire-reports/**.xml'
        }
    }

    stages {
        stage("Build") {
            steps {
                sh "mvn clean package -Dmaven.test.skip=true"
            }
        }
        stage("Test") {
            steps {
                sh "mvn test"
            }
        }
        stage("Verify") {
            steps {
                withSonarQubeEnv("sonarcloud") {
                  sh "mvn sonar:sonar -Dsonar.projectKey=paraskumarHVA_asv-swagger-codegen -Dsonar.organization=paraskumarhva-github"
                }
                // timeout(time: 30, unit: "MINUTES") {
                    //waitForQualityGate abortPipeline: true
                //}
            }
        }
        //stage("Quality Gate") {
          //  steps {
            //    sleep(10)
              //  timeout(time: 30, unit: 'MINUTES') {
                    // Parameter indicates whether to set pipeline to UNSTABLE if Quality Gate fails
                    // true = set pipeline to UNSTABLE, false = don't
                    // Requires SonarQube Scanner for Jenkins 2.7+
                //    waitForQualityGate abortPipeline: true
                //}
            //}
        //}
        stage("Deploy") {
            steps{
                script {
                    dockerImage = docker.build("asv-swagger-codegen:${env.BUILD_ID}")
                }
                // def customImage = docker.build("my-image:${env.BUILD_ID}")
                //sh "docker build --rm -t asv-swagger-codegen:${VERSION} ."
            }
        }
        //stage('Push image') {
            //docker.withRegistry('https://registry.hub.docker.com', 'docker-hub-credentials') {
                //dockerImage.push("${env.BUILD_NUMBER}")
                //dockerImage.push("latest")
            //}
        //}
    }
}
