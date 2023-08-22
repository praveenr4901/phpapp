@extends('layouts.main')

@push('stylesheets')
@endpush

@section('title','home')

@section('content')

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <div class="mobile-search waves-effect waves-light">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close"><i
                                            class="ti-close input-group-text"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn"><i
                                            class="ti-search input-group-text"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                    </ul>
                    @include('layouts.userMenu')
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    @include('layouts.pageHeader')
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="row m-b-30">
                                                    <div class="col-lg-12 col-md-12 col-xl-12">
                                                        <!-- Nav tabs -->
                                                        @include('admin.includes.claimsMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>ID</th>
                                                                            <th>Rule</th>
                                                                            <th>Claim Count</th>
                                                                            <th>Total Points</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                        <tr>
                                                                            <td>146</td>
                                                                            <td>G-1</td>
                                                                            <td>Youth Exchange</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>147</td>
                                                                            <td>G-1.1</td>
                                                                            <td>For sponsoring one international student
                                                                                visiting our district as part of youth
                                                                                exchange</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>148</td>
                                                                            <td>G-2</td>
                                                                            <td>Skill development &amp; placement
                                                                                program</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>149</td>
                                                                            <td>G-2.1</td>
                                                                            <td>Sponsoring one student with Rs.6000 for
                                                                                skill development program</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>150</td>
                                                                            <td>G-3</td>
                                                                            <td>Lions Quest</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>151</td>
                                                                            <td>G-3.1</td>
                                                                            <td>(a) Sponsoring Teachers for Teachers
                                                                                Training Workshop (per teacher 5)</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>152</td>
                                                                            <td>G-3.2</td>
                                                                            <td>(b) Ensuring implementation of skills
                                                                                for Adolescence in a school visiting
                                                                                school and reviewing progress</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>153</td>
                                                                            <td>G-4</td>
                                                                            <td>Peace Poster Contest</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>154</td>
                                                                            <td>G-4.1</td>
                                                                            <td>(a) Conducting Peace Poster Contest in a
                                                                                School</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>155</td>
                                                                            <td>G-4.2</td>
                                                                            <td>(b) Sponsoring students for District
                                                                                level Peace Poster Contest (per school
                                                                                2)</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>156</td>
                                                                            <td>G-5</td>
                                                                            <td>Cycle Distribution</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>157</td>
                                                                            <td>G-5.1</td>
                                                                            <td>Distribution of cycles to students from
                                                                                area without public transport</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>158</td>
                                                                            <td>G-6</td>
                                                                            <td>Reading Action Programme</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>159</td>
                                                                            <td>G-6.1</td>
                                                                            <td>Implementing RAP in Government/Aided
                                                                                Schools</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>160</td>
                                                                            <td>G-7</td>
                                                                            <td>Awareness Program for Mental Health
                                                                                &amp; Suicide Prevention</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>161</td>
                                                                            <td>G-8</td>
                                                                            <td>Training on Basic Life Support</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>162</td>
                                                                            <td>G-9</td>
                                                                            <td>Medical Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>163</td>
                                                                            <td>G-9.1</td>
                                                                            <td>(a) Allopathy Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>164</td>
                                                                            <td>G-9.2</td>
                                                                            <td>(b) Homoeo Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>165</td>
                                                                            <td>G-9.3</td>
                                                                            <td>(c) Ayurveda Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>166</td>
                                                                            <td>G-9.4</td>
                                                                            <td>(d) Dental Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>167</td>
                                                                            <td>G-9.5</td>
                                                                            <td>(e) veternary Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>168</td>
                                                                            <td>G-9.6</td>
                                                                            <td>(f) Medical check up &amp; camps at
                                                                                Police station</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>169</td>
                                                                            <td>G-10</td>
                                                                            <td>Artificial limbs for differently abled
                                                                                persons</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>170</td>
                                                                            <td>G-10.1</td>
                                                                            <td>Sponsoring Artificial limbs/appliances
                                                                                for differently abled persons</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>171</td>
                                                                            <td>G-11</td>
                                                                            <td>Palliative Care</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>172</td>
                                                                            <td>G-11.1</td>
                                                                            <td>Providing aid to terminally ill patients
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>173</td>
                                                                            <td>G-12</td>
                                                                            <td>Blood Donation</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>174</td>
                                                                            <td>G-12.1</td>
                                                                            <td>(a) Donating blood to blood bank ( per
                                                                                unit)</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>175</td>
                                                                            <td>G-12.2</td>
                                                                            <td>(b) Giving list of members to blood
                                                                                donors forum</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>176</td>
                                                                            <td>G-13</td>
                                                                            <td>Eye Screening Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>177</td>
                                                                            <td>G-13.1</td>
                                                                            <td>(a) Conducting an Eye screening Camp for
                                                                                identifying cataract patients</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>178</td>
                                                                            <td>G-13.2</td>
                                                                            <td>(b) If minimum 100 patients attend a
                                                                                screening camp</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>179</td>
                                                                            <td>G-13.3</td>
                                                                            <td>(c) For every 10 cataract sureguries
                                                                                completed</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>180</td>
                                                                            <td>G-14</td>
                                                                            <td>Sight for Kids programme</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>181</td>
                                                                            <td>G-14.1</td>
                                                                            <td>(a) Sponsoring Teachers for Teachers
                                                                                Training workshop(per teacher 2 points)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>182</td>
                                                                            <td>G-14.2</td>
                                                                            <td>(b) Conducting Vision Screening in
                                                                                Schools (per school 2 points)</td>
                                                                            <td>5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>183</td>
                                                                            <td>G-14.3</td>
                                                                            <td>(c) Conducting Referral Camps (per camp
                                                                                10 points)</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>184</td>
                                                                            <td>G-14.4</td>
                                                                            <td>(d) Distribution of spectacles to needy
                                                                                children</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>185</td>
                                                                            <td>G-15</td>
                                                                            <td>KID's Vision screening program</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>186</td>
                                                                            <td>G-15.1</td>
                                                                            <td>Conducting an Eye screening Camp for
                                                                                children below 6 years using Auto
                                                                                refractory meter</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>187</td>
                                                                            <td>G-16</td>
                                                                            <td>Arranging Cornea Transplantation</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>188</td>
                                                                            <td>G-16.1</td>
                                                                            <td>For arranging transplantation of one
                                                                                pair of cornea</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>189</td>
                                                                            <td>G-17</td>
                                                                            <td>Diabetic detection Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>190</td>
                                                                            <td>G-17.1</td>
                                                                            <td>(a) Arranging Diabetic detection Camps
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>191</td>
                                                                            <td>G-17.2</td>
                                                                            <td>(b) Conducting awareness seminar</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>192</td>
                                                                            <td>G-18</td>
                                                                            <td>Relieving Hunger</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>193</td>
                                                                            <td>G-18.1</td>
                                                                            <td>(a) Associating with the distribution of
                                                                                Onam Food kits to poor - one member one
                                                                                kit worth Rs. 500/- each through the
                                                                                district</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>194</td>
                                                                            <td>G-18.2</td>
                                                                            <td>(b) Providing groceries to institutions
                                                                                giving shelter to patients (cancer,
                                                                                mentally retarted, etc)</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>195</td>
                                                                            <td>G-18.3</td>
                                                                            <td>(c) Contributing Rs. 6000 for
                                                                                Distribution of noon meal every day at
                                                                                RCC Hospital</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>196</td>
                                                                            <td>G-19</td>
                                                                            <td> Protecting Environment</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>197</td>
                                                                            <td>G-19.1</td>
                                                                            <td>(a) Planting trees in public places with
                                                                                tree guards minimum 5 Nos.</td>
                                                                            <td>3</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>198</td>
                                                                            <td>G-19.2</td>
                                                                            <td>(b) Setting herbal Gardens in schools
                                                                                with botanical names</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>199</td>
                                                                            <td>G-19.3</td>
                                                                            <td>(c) Providing disposable bins in public
                                                                                places (5 point per Bin)</td>
                                                                            <td>4</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>200</td>
                                                                            <td>G-20</td>
                                                                            <td>Childhood Cancer</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>201</td>
                                                                            <td>G-20.1</td>
                                                                            <td>Providing Fincancial Aid of Rs.12000 to
                                                                                a cancer affected child</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>202</td>
                                                                            <td>G-21</td>
                                                                            <td>Seminars</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>203</td>
                                                                            <td>G-21.1</td>
                                                                            <td>(a) Diabetic foot care-conducting
                                                                                awareness seminars on diabetic foot care
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>204</td>
                                                                            <td>G-21.2</td>
                                                                            <td>(b) Conducting seminar on cyber safety
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>205</td>
                                                                            <td>G-21.3</td>
                                                                            <td>(c) Conducting seminar on Drug Abuse
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>206</td>
                                                                            <td>G-21.4</td>
                                                                            <td>(d) Conducting seminar on Traffic Rules
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>207</td>
                                                                            <td>G-22</td>
                                                                            <td>Convex Mirror</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>208</td>
                                                                            <td>G-22.1</td>
                                                                            <td>Installing Convex Mirror at blind curves
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>209</td>
                                                                            <td>G-23</td>
                                                                            <td>Sewing Machine Distribution</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>210</td>
                                                                            <td>G-24</td>
                                                                            <td>Umbrella Distribution</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>211</td>
                                                                            <td>G-24.1</td>
                                                                            <td>Distribution of Beach Umbrella for
                                                                                street vendors</td>
                                                                            <td>5</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>212</td>
                                                                            <td>G-25</td>
                                                                            <td>District Signature Project</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>213</td>
                                                                            <td>G-25.1</td>
                                                                            <td>Donating Rs.10,000 to the signature
                                                                                project of the district</td>
                                                                            <td>10</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>214</td>
                                                                            <td>G-25.2</td>
                                                                            <td>Clubs donating more than 1,00,000 will
                                                                                get a bonus 50 points</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>215</td>
                                                                            <td>G-26</td>
                                                                            <td>Newspaper clipping of service projects
                                                                                (10 per clipping upto 6 events)</td>
                                                                            <td>6</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>216</td>
                                                                            <td>G-27</td>
                                                                            <td>Other Projects (Where there is a need,
                                                                                There is a Lion)</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>217</td>
                                                                            <td>G-27.1</td>
                                                                            <td>Clubs are free to do projects as per the
                                                                                need of the society</td>
                                                                            <td>800</td>
                                                                            <td>800</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>218</td>
                                                                            <td>G-28</td>
                                                                            <td>Signature Project Participation </td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    @endsection

    @push('stylesheets')
    @endpush
    @push('javascripts')
    @endpush