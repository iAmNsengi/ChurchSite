from django.db import models

# Create your models here.
class SiteSetting(models.Model):
    aboutUs = models.TextField(null=True, blank=True)
    ourVision = models.TextField(null=True, blank=True)
    ourMission = models.TextField(null=True, blank=True)
    ourObjectives = models.TextField(null=True, blank=True)
    pastorsMessage = models.TextField(null=True, blank=True)
    pastorsMessageVideo = models.URLField(null=True, blank=True)
    updatedAt = models.DateTimeField(auto_now=True)
    createdAt = models.DateTimeField(auto_now_add=True)

    def __str__(self) -> str:
        return "Latest Setting " + self.updatedAt

class Department(models.Model):
    name = models.CharField(max_length=100)
    image = models.ImageField(upload_to='uploads/')
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

    def __str__(self) -> str:
        return self.name + " " + self.updatedAt
    
class Activity(models.Model):
    title = models.CharField(max_length=100)
    description = models.TextField()
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

    def __str__(self) -> str:
        return self.title + " " + self.updatedAt


class Program(models.Model):
    title = models.CharField(max_length=100)
    image = models.ImageField(upload_to='uploads/')
    description = models.TextField()
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

    def __str__(self) -> str:
        return self.title

class Thoughts(models.Model):
    title = models.CharField(max_length=100)
    image = models.ImageField(upload_to='uploads/')
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

    def __str__(self) -> str:
            return self.title 
    
class Sermom(models.Model):
    series_title = models.CharField(max_length=100)
    sermon_title = models.CharField(max_length=100)
    speaker = models.CharField(max_length=100)
    url = models.URLField()
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

    def __str__(self) -> str:
        return self.title +" " + self.speaker
    
class Gallery(models.Model):
    image = models.ImageField(upload_to='uploads/')
    description = models.TextField()
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)


class Contact(models.Model):
    email = models.EmailField()
    phone = models.CharField(max_length=100)
    address = models.TextField()
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)

class Partner(models.Model):
    name = models.CharField(max_length=100)
    image = models.ImageField(upload_to='uploads/')
    createdAt = models.DateTimeField(auto_now_add=True)
    updatedAt = models.DateTimeField(auto_now=True)
