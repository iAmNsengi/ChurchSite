from django.shortcuts import render,redirect
from django.views import View
from django.contrib.auth.models import User
from django.contrib.auth import login,logout,authenticate
from django.contrib import messages
# Create your views here.
class Home(View):
    def get(self,request):
        return render(request,'index.html')

class Login(View):
    def get(self,request):
        return render(request,'login.html')
    
    def post(self,request):
        if request.method == 'POST':
            username = request.POST['email']
            password = request.POST['password']
            user = authenticate(request, username=username, password=password)
            if user is not None:
                login(request, user)
                return redirect('/dashboard')
            else:
                messages.error(request,'404 ---- User With Given Credentials Was not found!')
                return render(request, 'login.html')

def Logout(request):
    logout(request)
    return redirect('/login')