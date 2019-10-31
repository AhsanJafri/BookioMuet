import pymysql
from flask import Flask,jsonify,render_template,make_response,request
import json
import collections
app=Flask(__name__)
conn = pymysql.connect(host='localhost', port=3306, user='root', passwd='', db='sec_year',charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)
cur = conn.cursor()

#Data Selection through url containing subject only.
@app.route("/mcq/<string:sub>")
def method(sub):
    query="SELECT m.M_ID,m.M_Ques,m.opt_one,m.opt_two,m.opt_three,m.opt_four,m.answer FROM mcqs m,subject s where s.Sub_Name='{}' and m.Sub_ID=s.Sub_ID ".format(sub)
    cur.execute(query)
    rows = cur.fetchall()
    objects_list = []
    for row in rows:
        d = collections.OrderedDict()
        d['question'] = row['M_Ques']
        d['option 1'] = row['opt_one']
        d['option 2'] = row['opt_two']
        d['option 3'] = row['opt_three']
        d['option 4'] = row['opt_four']
        d['answer'] = row['answer']
        objects_list.append(d)
    js=json.dumps(objects_list)
    return js, 200


#Data Selection through url containing subject and chapter
@app.route("/mcq/<string:sub>/<int:chap>")
def method2(sub,chap):
    query="SELECT m.M_ID,m.M_Ques,m.opt_one,m.opt_two,m.opt_three,m.opt_four,m.answer FROM mcqs m,subject s where s.Sub_Name='{}'and m.Chap_ID='{}' and m.Sub_ID=s.Sub_ID ".format(sub,chap)
    cur.execute(query)
    rows = cur.fetchall()
    objects_list = []
    for row in rows:
        d = collections.OrderedDict()
        d['question'] = row['M_Ques']
        d['option 1'] = row['opt_one']
        d['option 2'] = row['opt_two']
        d['option 3'] = row['opt_three']
        d['option 4'] = row['opt_four']
        d['answer'] = row['answer']
        objects_list.append(d)
    js = json.dumps(objects_list)
    return js, 200



#Data retrieve on the basis of data sent through json(Subject)
@app.route('/mcqs/apipost1',methods=['POST'])
def methodexam():
    js=request.get_json()
    sub=js['sub'] #Send a json reponse to fetch data with respect to year
    query = "SELECT m.M_ID,m.M_Ques,m.opt_one,m.opt_two,m.opt_three,m.opt_four,m.answer,m.Chap_ID FROM mcqs m,subject s where s.Sub_Name='{}' and m.Sub_ID=s.Sub_ID ".format(sub)
    cur.execute(query)
    rows = cur.fetchall()
    objects_list = []
    for row in rows:
        d = collections.OrderedDict()
        d['question'] = row['M_Ques']
        d['option 1'] = row['opt_one']
        d['option 2'] = row['opt_two']
        d['option 3'] = row['opt_three']
        d['option 4'] = row['opt_four']
        d['answer'] = row['answer']
        d['Chapter'] = row['Chap_ID']
        objects_list.append(d)
    js = json.dumps(objects_list)
    return js, 200



#Data retrieve on the basis of data sent through json(Subject and chap)
@app.route('/mcqs/apipost2',methods=['POST'])
def methodexam2():
    js=request.get_json()
    sub=js['sub'] #Send a json reponse to fetch data with respect to subject sent
    ch = js['chap']  # Send a json reponse to fetch data with respect to Chap sent
    query = "SELECT m.M_ID,m.M_Ques,m.opt_one,m.opt_two,m.opt_three,m.opt_four,m.answer FROM mcqs m,subject s where s.Sub_Name='{}' and Chap_ID='{}' and m.Sub_ID=s.Sub_ID ".format(sub,ch)
    cur.execute(query)
    rows = cur.fetchall()
    objects_list = []
    for row in rows:
        d = collections.OrderedDict()
        d['question'] = row['M_Ques']
        d['option 1'] = row['opt_one']
        d['option 2'] = row['opt_two']
        d['option 3'] = row['opt_three']
        d['option 4'] = row['opt_four']
        d['answer'] = row['answer']
        objects_list.append(d)
    js = json.dumps(objects_list)
    return js, 200



#Sending data reponse and saving it in database
@app.route('/mcqs/apiinsert',methods=['POST'])
def methodexam3():
    js=request.get_json()
    s=js['sub']
    que=js['ques']
    o1=js['opt1']
    o2=js['opt2']
    o3=js['opt3']
    o4=js['opt4']
    ch = js['chap']
    an = js['ans']
    query="insert into mcqs values (null,'{}',{},{},'{}','{}','{}','{}','{}')".format(que,s,ch,o1,o2,o3,o4,an)
    if(cur.execute(query)):
        conn.commit()
        return "successfull",200

if __name__=="__main__":
    app.run(debug=True)
