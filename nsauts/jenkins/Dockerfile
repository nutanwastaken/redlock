#Image jenkins
FROM jenkins/jenkins

#Initialize root user
USER root

#Updating and configuring the image
RUN apt-get update
RUN apt-get -y install openssh-client
RUN apt-get -y install sshpass