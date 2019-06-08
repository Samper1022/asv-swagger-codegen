pipeline {
    agent {
        docker {
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
                sleep(10)
                timeout(time: 30, unit: "MINUTES") {
                    waitForQualityGate abortPipeline: true
                }
            }
        }
    }
}
