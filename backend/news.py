import requests
from bs4 import BeautifulSoup

url = "https://canaltech.com.br/ultimas/"

response = requests.request("GET", url=url).text

soup = BeautifulSoup(response, 'lxml')

article = soup.find(attrs={"id":"__next"}).find(attrs={"id":"NewsContainer"}).find(attrs={"class":"c-fzqDOH"}).find_all("article")


for articles in article:
    print(articles.text)