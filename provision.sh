#!/bin/bash

echo -e "\e[96m# Update package lists \e[39m"
echo -e "\e[96m# ########################### \e[39m"
apt update -y >> /dev/null

echo -e "\e[96m# Installing git \e[39m"
apt install -y git

echo -e "\e[96m# Installing Docker \e[39m"
echo -e "\e[96m# ########################### \e[39m"
apt install -y apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
apt-cache policy docker-ce
apt install -y docker-ce
docker -v

echo -e "\e[96m# Installing Docker compose \e[39m"
echo -e "\e[96m# ########################### \e[39m"
curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
docker-compose --version

echo -e "\e[96m# Installing Jenkins \e[39m"
echo -e "\e[96m# ########################### \e[39m"
apt-get update -y
apt install -y default-jdk
curl -fsSL https://pkg.jenkins.io/debian/jenkins.io-2023.key | tee /usr/share/keyrings/jenkins-keyring.asc > /dev/null
echo deb [signed-by=/usr/share/keyrings/jenkins-keyring.asc] https://pkg.jenkins.io/debian binary/ | tee /etc/apt/sources.list.d/jenkins.list > /dev/null
apt install -y jenkins
