@extends('layouts.company')

@section('content')

    <div id="app">
        <div>
            <div style="padding: 20px">


                <form>


                    {{--            <div class="mb-3">--}}
                    {{--                <label for="exampleFormControlInput1" class="form-label">Logo</label>--}}
                    {{--                <input type="file" name="logo" class="form-control">--}}
                    {{--            </div>--}}

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1 contents" rows="3"
                                  name="contents"
                                  v-model="contents"
                                  value="{{ old('contents') }}" requried></textarea>
                    </div>

                    @error('content')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Signature</label>
                        <input type="file" name="signature" class="form-control" value="{{ old('signature') }}"
                               requried @change="signatureMethod">
                    </div>

                    @error('signature')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror




                    {{--jquery--}}

                    <div style="display: flex; justify-content: space-between">
                        <!-- -------------------------- Left Side Form ------------------------------ -->

                        <div>
                            <p>Add Value</p>

                            <form>
                                <input type="text" ref="risk" name="risk" placeholder="Risk" class="form-control"/> <br/>
                                <input type="text" ref="premium" name="rate" placeholder="Premium Rate" class="form-control"/> <br/>
                                <input
                                    type="text"
                                    ref="bdt"
                                    name="bdt"
                                    placeholder="Premium on BDT"
                                    class="form-control"

                                />
                                <br/>
                                <!-- <input type="number" ref="vat" placeholder="vat" /> <br /><br /> -->
                                <button type="button" v-on:click="add()" class="btn" style="background-color: #0f6848;color: #FFFFFF">Add</button>
                            </form>
                        </div>

                        <!-- -------------------------- Left Side Form ------------------------------ -->

                        <!-- -------------------------- Right Side Form ------------------------------ -->

                        <div class="edit-value-div" style="display: none">
                            <p>Edit Value</p>

                            <form>
                                <input
                                    type="number"
                                    ref="edit_id"
                                    placeholder="edit id"
                                    style="display: none"
                                /><br/>
                                <input type="text" ref="risk_edit" placeholder="Risk" class="form-control"/> <br/>
                                <input type="text" ref="premium_edit" placeholder="Premium Rate" class="form-control"/>
                                <br/>
                                <input
                                    type="text"
                                    ref="bdt_edit"
                                    placeholder="Premium on BDT"
                                    class="form-control"

                                />
                                <br/>
                                <!-- <input type="number" ref="vat_edit" placeholder="vat" /> -->
                                <br/><br/>
                                <button
                                    type="button"
                                    v-on:click="update($event)"
                                    class="update-btn btn"
                                    style="background-color: #0f6848;color: #FFFFFF"
                                >
                                    Update
                                </button>
                            </form>
                        </div>

                        <!-- -------------------------- Right Side Form ------------------------------ -->
                    </div>

                    <!-- --------------------------- Table Data ----------------------- -->
                    <br/><br/>
                    <table
                        style="
            width: 100%;
            align-items: center;
            border: 1px solid rebeccapurple;
          "
                    >
                        <tr align="center">
                            <th>Risk</th>
                            <th>Premium</th>
                            <th>bdt</th>
                            <!-- <th>vat</th> -->
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>

                        <tr v-for="(item,index) in totalValue" :key="index">
                            <td align="center">@{{ item.risk }}</td>
                            <td align="center">@{{ item.premium }}</td>
                            <td align="center">@{{ item.bdt }}</td>
                            <!-- <td align="center">@{{ item.vat }}</td> -->
                            <td align="center">
                                <button v-on:click="edit(index, $event)" class="edit-btn btn" style="background-color: #1b4b72;color: #FFFFFF;line-height: 0.8;font-size: 15px;">
                                    Edit
                                </button>
                            </td>

                            <td align="center">
                                <button v-on:click="remove(index , $event)" class="btn" style="background-color: red;color: #FFFFFF;line-height: 0.8;font-size: 15px;">Remove</button>
                            </td>
                        </tr>
                    </table>

                    <!-- --------------------------- Table Data ----------------------- -->

                    <p>Total :@{{ total }}</p>
                    <p>
                        Vat :
                        <input
                            type="number"
                            v-model="vat"
                            min="0"
                            oninput="this.value =
          !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"
                        />
                        %
                    </p>
                    <p>With vat : @{{ withVatMethod() < 0 ? 0 : withVatMethod() }}</p>
                    <p>Total with vat: @{{ totalWithVatMethod() }}</p>
                    <div></div>
                    <button type="button" class="btn " v-on:click="submitData($event)" style="background-color: #0f6848;color: #FFFFFF">Submit</button>




        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


    <script>
        var app = new Vue({
            el: "#app",
            data: {
                message: "Vue Js Test",
                totalValue: [],
                total: 0,
                vat: 0,
                withVat: 0,
                totalWithVat: 0,
                content: '',
                signature: '',
            },
            methods: {

                signatureMethod(event) {
                    var vm = this;
                    vm.signature = event.target.files[0];
                },
                submitData(e) {

                    const formData = new FormData();
                    formData.set("contents", tinymce.activeEditor.getContent("contents"));
                    formData.set("signature", this.signature);
                    formData.set("risk", JSON.stringify(this.totalValue));
                    formData.set("net_premium", this.total);
                    formData.set("vat", this.vat);
                    formData.set("vats", this.withVat);
                    formData.set("total", this.totalWithVat);





                    axios.post("{{ route('quotation.store') }}", formData).then(el => {
                        console.log(el);
                        location.reload();
                    });
                },

                withVatMethod() {
                    this.withVat = Number(this.total * this.vat) / 100;
                    return this.withVat;
                },

                totalWithVatMethod() {
                    this.totalWithVat = this.total + this.withVat;

                    return this.totalWithVat <= 0 ? 0 : this.totalWithVat;
                },

                add() {

                    var vm = this;
                    let objectValue = {};
                    objectValue.risk = this.$refs["risk"].value;
                    objectValue.bdt = this.$refs["bdt"].value;
                    // objectValue.vat = this.$refs["vat"].value;
                    objectValue.premium = this.$refs["premium"].value;
                    vm.totalValue.push(objectValue);

                    this.total += Number(objectValue.bdt);
                },
                edit($id, event) {
                    event.preventDefault();

                    document.querySelector(".edit-value-div").style.display = "inline";

                    this.$refs["edit_id"].value = $id;
                    this.$refs["risk_edit"].value = this.totalValue[$id].risk;
                    this.$refs["premium_edit"].value = this.totalValue[$id].premium;
                    this.$refs["bdt_edit"].value = this.totalValue[$id].bdt;
                    // this.$refs["vat_edit"].value = this.totalValue[$id].vat;
                },

                update(event) {
                    event.preventDefault();

                    document.querySelector(".edit-value-div").style.display = "none";

                    let updateObjectValue = {};

                    let $id = this.$refs["edit_id"].value;

                    updateObjectValue.risk = this.$refs["risk_edit"].value;
                    updateObjectValue.bdt = this.$refs["bdt_edit"].value;
                    // updateObjectValue.vat = this.$refs["vat_edit"].value;
                    updateObjectValue.premium = this.$refs["premium_edit"].value;

                    this.totalValue.splice($id, 1, updateObjectValue);

                    this.total = 0;

                    this.totalValue.forEach((element) => {
                        this.total += Number(element.bdt);
                    });
                },

                remove($id, event) {
                    document.querySelector(".edit-value-div").style.display = "none";

                    // console.log($id);
                    event.preventDefault();
                    this.totalValue.splice($id, 1);

                    this.total = 0;

                    this.totalValue.forEach((element) => {
                        this.total += Number(element.bdt);
                    });
                },
            },
        });
    </script>

@endsection




