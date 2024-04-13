from django.urls import path
from .views import *

urlpatterns = [
    path('',Home.as_view()),
    path('dashboard',Dashboard.as_view()),
    path('login',Login.as_view()),
    path('logout',logout),

]